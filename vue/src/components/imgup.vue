<template>
  <div id="imgup">
	<input class="file" name="file" type="file" accept="image/png,image/gif,image/jpeg" @change="uploading"/>
	<img :src="src">

  </div>
</template>

<script>
  import Axios from "axios";

		export default {
		  	name: 'index',
			data () {
				return {
					file:'',
					src:''
				}
			},
			components:{

 			},
 			methods:{
				uploading(event){
					this.file = event.target.files[0];//获取文件
					var windowURL = window.URL || window.webkitURL;
					this.file = event.target.files[0];//创建图片文件的url
					this.src = windowURL.createObjectURL(event.target.files[0]);

				},
				submit(){
					event.preventDefault();//取消默认行为
					let formdata = new FormData();
					formdata.append('file',this.file);
					let config = {
						headers: {
							'Content-Type': 'multipart/form-data'  //之前说的以表单传数据的格式来传递fromdata
						}
					};
					this.$http.post('/upload', formData, consolefig).then((res) => {
						//做处理
					}).catch((error) =>{

					});
				}

 			},
			mounted(){

			}
		}
</script>


<style scoped>
  @import "../assets/css/reset.css";
	.file{
		font-size: 20px;
	}
</style>
