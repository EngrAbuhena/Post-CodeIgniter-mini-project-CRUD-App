<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// view all posts from database
	    $this->load->model('queries');
	    $posts = $this->queries->getPosts();
        $this->load->view('welcome_message',['posts'=>$posts]);
	}

	public function create()
    {
		// call create post page
	    $this->load->view('create');
    }

    public function save()
    {
		// save into database
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run())
        {
            $data=$this->input->post();
            $today = date('Y-m-d');
            $data['date_created']=$today;
            unset($data['submit']);
            $this->load->model('queries');

            if ($this->queries->addPost($data)){
                $this->session->set_flashdata('msg','<p class="alert alert-success"><strong>Post saved successfully!</strong></p>');
            }
            else{
                $this->session->set_flashdata('msg','<p class="alert alert-danger"><strong>Failed to save post!</strong></p>');
            }
            return redirect('welcome');
        }
        else
        {
            $this->load->view('create');
        }
    }

	public function view($id)
	{
		// view single post from database
		$this->load->model('queries');
	    $post = $this->queries->getSinglePost($id);
		$this->load->View('view', ['post'=>$post]);
	}

    public function update($id)
    {
        // call update page
		$this->load->model('queries');
	    $post = $this->queries->getSinglePost($id);
		$this->load->View('update', ['post'=>$post]);
    }

	public function change($id)
	{
		// update a single post into database
		$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run())
        {
            $data=$this->input->post();
            $today = date('Y-m-d');
            $data['date_created']=$today;
            unset($data['submit']);
            $this->load->model('queries');

            if ($this->queries->updatePost($data, $id)){
                $this->session->set_flashdata('msg','<p class="alert alert-success"><strong>Post updated successfully!</strong></p>');
            }
            else{
                $this->session->set_flashdata('msg','<p class="alert alert-danger"><strong>Failed to update post!</strong></p>');
            }
            return redirect('welcome');
        }
        else
        {
            $this->load->view('update');
        }
	}

    public function delete($id)
    {
        // destroy from the database
		$this->load->model('queries');
	    if($this->queries->deletePost($id)){
			$this->session->set_flashdata('msg', '<p class="alert alert-success"><strong>Post deleted successfully!</strong></p>');
		}
		else {
			$this->session->set_flashdata('msg', '<p class="alert alert-danger"><strong>Failed to delete post!</strong></p>');
		}
		return redirect('welcome');
    }

}
