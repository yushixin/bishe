<template>
	<div class="header">
		<h2>{{title}}</h2>
	</div>
</template>

<script>

export default {
  data() {
    return {
    }
  },
  props:['title']
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  @import "../../assets/css/reset.css";	
  .header{
    display: flex;
    height: 1rem;
    color: #fff;
  }
  .header button{
    width: 1rem;
    height: 1rem;
    color: #fff;
  }
  .header h2{
    flex: 1;
    text-align: center;
    /*text-indent: -1rem;*/
    line-height: 1rem;
  }
  .header{
    position: fixed;
    top: 0;
    width: 100%;
    background:#edbf2b;
  }

</style>
