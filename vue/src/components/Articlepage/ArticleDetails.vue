<template>
  <div class="ArticleDetails">
    <common-header :title="title"></common-header>
    <div class="Details">
      <div class="title-div"><h2>{{data.a_title}}</h2></div>
      <div class="article-div"><p>{{data.a_article}}</p></div>
      
    </div>
    <common-footer></common-footer>
  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../../assets/js/jquery-1.12.4.min.js"
  import CommonHeader from '../common/CommonHeader'
  import CommonFooter from '../common/CommonFooter'

export default {
  data() {
    return {
      title:"文章详情",
      data:[]
    }
  },
  components:{
          CommonHeader,
          CommonFooter
  },
  methods:{
    
  },
  mounted() {
    var aid=this.$route.params.id;
    console.log(aid);
    Axios.get('http://localhost:3000/showArticleDetails',{
      params:{
        aid:aid
      }
    }).then((res)=>{
          this.data = JSON.parse(res.data);
          
       });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  p,h2{
    margin:0;
  }

  .Details{
    position: absolute;
    top: 1rem;
    width: 80%;
  }
  .title-div{
    height: 1rem;
    width: 100%;
    font-size: 0.5rem;
    border-bottom-style: solid;
    border-width: 2px;
    border-color: block;
  }
  .article-div{
    width: 100%;
    font-size: 0.4rem;

  }

</style>
