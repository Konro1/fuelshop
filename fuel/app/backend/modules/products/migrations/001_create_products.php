<?php

namespace Fuel\Migrations;

class Create_products
{
	public function up()
	{
		\DBUtil::create_table('products', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'alias' => array('constraint' => 255, 'type' => 'varchar'),
			'description' => array('type' => 'text'),
			'img' => array('constraint' => 255, 'type' => 'varchar'),
			'price' => array('constraint' => '16,2', 'type' => 'decimal'),
			'manufacturer_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('products');
	}
}