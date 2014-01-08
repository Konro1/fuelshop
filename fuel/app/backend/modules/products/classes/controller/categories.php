<?php
namespace Products;

class Controller_Categories extends \Controller_Base{

	public function action_index()
	{
		$data['categories'] = Model_Category::find('all');
		$this->template->title = "Categories";
		$this->template->content = \View::forge('categories/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and \Response::redirect('categories');

		if ( ! $data['category'] = Model_Category::find($id))
		{
			\Session::set_flash('error', 'Could not find category #'.$id);
			\Response::redirect('categories');
		}

		$this->template->title = "Category";
		$this->template->content = \View::forge('categories/view', $data);

	}

	public function action_create()
	{
		if (\Input::method() == 'POST')
		{
			$val = Model_Category::validate('create');
			
			if ($val->run())
			{
				$category = Model_Category::forge(array(
					'title' => \Input::post('title'),
					'parent_id' => \Input::post('parent_id'),
				));

				if ($category and $category->save())
				{
					\Session::set_flash('success', 'Added category #'.$category->id.'.');

					\Response::redirect('categories');
				}

				else
				{
					\Session::set_flash('error', 'Could not save category.');
				}
			}
			else
			{
				\Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Categories";
		$this->template->content = \View::forge('categories/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and \Response::redirect('categories');

		if ( ! $category = Model_Category::find($id))
		{
			\Session::set_flash('error', 'Could not find category #'.$id);
			\Response::redirect('categories');
		}

		$val = Model_Category::validate('edit');

		if ($val->run())
		{
			$category->title = \Input::post('title');
			$category->parent_id = \Input::post('parent_id');

			if ($category->save())
			{
				\Session::set_flash('success', 'Updated category #' . $id);

				\Response::redirect('categories');
			}

			else
			{
				\Session::set_flash('error', 'Could not update category #' . $id);
			}
		}

		else
		{
			if (\Input::method() == 'POST')
			{
				$category->title = $val->validated('title');
				$category->parent_id = $val->validated('parent_id');

				\Session::set_flash('error', $val->error());
			}

			$this->template->set_global('category', $category, false);
		}

		$this->template->title = "Categories";
		$this->template->content = \View::forge('categories/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and \Response::redirect('categories');

		if ($category = Model_Category::find($id))
		{
			$category->delete();

			\Session::set_flash('success', 'Deleted category #'.$id);
		}

		else
		{
			\Session::set_flash('error', 'Could not delete category #'.$id);
		}

		\Response::redirect('categories');

	}


}
