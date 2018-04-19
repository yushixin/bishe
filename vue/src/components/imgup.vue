<template>
  <div id="imgup">
<!-- 	<input class="file" name="file" type="file" accept="image/png,image/gif,image/jpeg" @change="uploading"/>
	<img :src="src"> -->
	<form name="form1" id="form1">  
        <p>name:<input type="text" name="name" /></p>
        <p>gender:	<input type="radio" name="gender" value="1" />male 
					<input type="radio" name="gender" value="2" />female
		</p>
        <p>stu-number：<input type="text" name="number" /></p>  
        <p>photo:<input type="file" name="photo" id="photo"></p>  
        <p><input type="button" name="b1" value="submit"  @click="fsubmit"/></p>  
	</form>  
	<div id="result"></div>

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
					console.log(this.file);

					var windowURL = window.URL || window.webkitURL;
					console.log(windowURL);

					this.file = event.target.files[0];//创建图片文件的url
					console.log(this.file);

					this.src = windowURL.createObjectURL(event.target.files[0]);
					console.log(this.src);

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
					this.$http.post('/upload', formData, config).then((res) => {
						//做处理
					}).catch((error) =>{

					});
				},
				fsubmit:function(){
					var _this = this;
					var form=document.getElementById("form1");
					var fd =new FormData(form);
					console.log(fd);
					$.ajax({
			             url: "http://127.0.0.1/bishegogogo/CI/img/test",
			             type: "POST",
			             data: fd,
			             processData: false,  // 告诉jQuery不要去处理发送的数据
			             contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
			             success: function(response,status,xhr){
			                console.log(response);
			                var json=$.parseJSON(response);
							console.log(json['imgurl']);
// http://127.0.0.1/imgsss/
			                var result = '';
			                result +="个人信息：<br/>name:"+json['name']+"<br/>gender:"+json['gender']+"<br/>number:"+json['number'];
			                 result += '<br/>头像：<img src="http://127.0.0.1/imgsss/'+json['photo']+'" height="100" style="border-radius: 50%;"/>';
			                 $('#result').html(result);
			             }
					});
					return false;
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
	#form1{
		/*height: 1rem;*/
		font-size: 0.5rem;
	}
</style>
