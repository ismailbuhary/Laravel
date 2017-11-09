<template>
<li>
<img:src="product.image">
<p><strong>{{product.name}}</strong></p>
<p>{{product.description}} <a @click="requestRemoval">Hide this item</a></p>
</template>

<script>
export default{
name: 'product-list-item',
props:['product'],
methods:{
	requestRemoval(){
		this.$emit('remove');
	}

};

</script>


Are there any opportunities open at your location?<style>
img {
	float:left;
	width:300px;
}
product-list li{
	margin-bottom:40px;
	clear:both;
}

.product-list img.small{
width:100px;
}
</style>
