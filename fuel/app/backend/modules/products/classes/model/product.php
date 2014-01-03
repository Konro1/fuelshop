<?php
namespace Products;
use Orm\Model;

class Model_Product extends Model
{
	protected static $_properties = array(
		'id',
		'title',
		'alias',
		'description',
		'img',
		'price',
		'manufacturer_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = \Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('alias', 'Alias', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');
		$val->add_field('img', 'Img', 'required|max_length[255]');
		$val->add_field('price', 'Price', 'required');
		$val->add_field('manufacturer_id', 'Manufacturer Id', 'required|valid_string[numeric]');

		return $val;
	}

}
