<template>
 <div id="navbar">

    <radial-menu
      style="color:white; margin: 0 auto; background-color: rgba(255, 255, 255, 0.205)"
      :itemSize="60"
      :radius="145"
      :angle-restriction="-180">
        <radial-menu-item
          v-for="(item, index) in menuitems" 
          :key="index" 
          style="background-color: rgba(255, 255, 255, 0.205); " 
          @click="() => handleClick(item)">
      <router-link :to="`/${item.id}`"><span style="color:rgb(223, 169, 52);font-size: 10px;">{{item}}</span></router-link> 

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
        lastClicked: 'Bee-Menu',
                              menuitems: [
                          'Profil', 
                          'Add a movie',
                           'Github',
                            'Disconnect',
                             'Favorites', 
                             'WatchLater'
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