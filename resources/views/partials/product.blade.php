<div class="product">

    <div class="container product-list" >
      <!--Popolamento dinamico della sezione product-->
      <div class="card" v-for="(link,index) in links" :key="index">
        <img :src="link.img" alt="">
        <a :href="link.url">{{link.text}}</a>
      </div>

    </div>
 
  </div>