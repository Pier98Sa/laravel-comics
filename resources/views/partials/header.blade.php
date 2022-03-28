<header>
    <nav class="container">
        <!--nav sx-->
        <div class="nav-left">
          <img src="../assets/img/dc-logo.png" alt="">
        </div>
    
        <!--nav dx-->
        <div class="nav-right">
          <ul>
            <!--Popolamento dinamico delle voci del menu-->
            <li v-for="(link,index) in links" :key="index" >
              <a :href="link.url"  @click="menuActive(index)" :class="(index == active) ? 'active':''">{{link.text}}</a>
            </li>
          </ul>
        </div>
    
      </nav>
</header>