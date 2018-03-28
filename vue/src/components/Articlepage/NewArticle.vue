<template>
  <div id="PersonalCenter">
	<common-header :title="title"></common-header>
	<new-article-next></new-article-next>
	<common-footer></common-footer>
  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../../assets/js/jquery-1.12.4.min.js"
  import CommonHeader from '../common/CommonHeader'
  import CommonFooter from '../common/CommonFooter'
  import NewArticleNext from './NewArticleNext'

//youcan_or_yot_youcan_this_is_a_question

		export default {
		  	name: 'NewArticle',
			data () {
				return {
					title:'发帖子'
				}
			},
			components:{
    			CommonHeader,
    			CommonFooter,
    			NewArticleNext
 			},
 			methods:{
				youcan_or_yot_youcan_this_is_a_question:function(){
					var value = sessionStorage.getItem("u_id");
					if(value == null){
						this.$router.push({path:"/WillDie"});
					}else if(value){
					}
				}
 			},
			mounted(){
				this.youcan_or_yot_youcan_this_is_a_question();

			}
		}
</script>

<style scoped>

</style>
