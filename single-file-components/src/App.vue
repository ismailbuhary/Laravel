<template>
<product-list :products="theProducts" title="Shop your award-winning product line"></product-list>
</template>

<script>
import List from './List.vue';

export default {
  name: 'app',
  data () {
    return {
    theProducts:[]
    
    
    };

  },
  
  components:{
		'product-list':List
  },
  created:function(){
	$.getJSON('http://hplussport.com/api/products')
	.done(function(data){
	vm.theProducts=data;
	});

  }
}
</script>


