<template>
  <div id="ImprovingPetInformation">
	<common-header :title="title"></common-header>
		<div class="content">
			
		</div>
	<common-footer></common-footer>
  </div>
</template>

<script>
  import Axios from "axios";
  import CommonHeader from '../common/CommonHeader'
  import CommonFooter from '../common/CommonFooter'
  // import IndexNext from './IndexNext'


		export default {
		  	name: 'index',
			data () {
				return {
					title: '完善宠物资料'
				}
			},
			components:{
    			CommonHeader,
    			CommonFooter,
 
 			},
 			methods:{

 			},
			mounted(){

			}
		}
</script>


<style scoped>
  @import "../../assets/css/reset.css";
  	.ImprovingPetInformation{
  		position: relative;
  	}
	.content{
		position: absolute;
		top: 1rem;
		width: 100%;
	}
</style>
