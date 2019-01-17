<template>
 <div id="navbar"  style="margin: 0 auto; ">
    <radial-menu
      style="color:white; margin: 0 auto; background-color: rgba(255, 255, 255, 0.205)"
      :itemSize="60"
      :radius="145"
      :angle-restriction="-180">
        <radial-menu-item
          v-for="(item, index) in menuitems" 
          :key="index" 
          style="background-color: rgba(255, 255, 255, 0.205); " 
          @click="() => handleClick(item.name)">
      <router-link :to="`${item.link}`"><span style="color:rgb(223, 169, 52);font-size: 10px;">{{item.name}}</span></router-link> 

        </radial-menu-item>
        
      </radial-menu>
      <div style="color: rgb(223, 169, 52); margin-top: 5px;">{{ lastClicked }}</div>
  </div>
</template>

<script>
import { RadialMenu,  RadialMenuItem } from 'vue-radial-menu'


export default {

data() {
   return {
        lastClicked: this.item,
                              menuitems: [
                                 {
                                    id:1,
                                    name: 'Profil', 
                                    link: '/profil'
                                 },
                                     {
                                    id:2,
                                    name: 'Add Movie', 
                                    link: '/films/create',
                               
                                 },
                                  {
                                    id:3,
                                    name: 'Favorite', 
                                    link: '/favorites'
                                 },
                                        {
                                    id:4,
                                    name: 'Home', 
                                    link: '/films'
                                 },
                                      {
                                    id:5,
                                    name: 'Watchlater', 
                                    link: '/watchlater'
                                 },
                         
                 
                          ],
                
   }
},
        methods: {
        handleClick (item) {
      this.lastClicked = item;},
            back() {
                window.history.back()
            },

        },
        components: {
        
                RadialMenu,
    RadialMenuItem
        },
  
}
</script>