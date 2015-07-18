<html>
<head>


</head>
<body>
	<?php 
		//FIND  aka select
		$ordersdetails = $this->orders->find(
			'all',
			array(
				'recursive'=>-1,
				'conditions'=>array(
					'AND'=>array(
						array('OrdersItem.id'=>'1'),
						array('OrdersItem.id'=>'1'),
						array('OrdersItem.id'=>'1')
					)
				
				),
				'fields'=>array(
					'OrdersItem.id',
					'OrdersItem.id',
					'OrdersItem.id'

				),
				'order'=>array('OrdersItem.id DESC'),
				'limit'=>20,
				'group'=>array()
			)
		);
		$this->set('orders',$ordersdetails);
		
		// END find
		
		// save AKA insert
			$temp=array();
			$this->User->Create();
			$temp['Users']['username'];
			$temp['Users']['password'];
			$this->User->Save($temp);
		
		
		// END SAVE
		
		// Update
			$this->Recipe->id = 2;
			$this->Recipe->save($this->request->data);
			
		
		//END update
		
		//Paginate 
		public $components = array('Paginator');
		$this->paginate = array(	
			'recursive'=>-1,
			'limit'=>20,
		)
		$this->paginate('Orders');
		$this->set('orders',$this->paginate('Orders'));
		
		//Paginate page
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		
		
		
		
		// END Paginate
		
		
		
		
	?>
</body>



</html>