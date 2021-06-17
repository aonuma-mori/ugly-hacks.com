<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>masonry</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-masonry@0.11.3/dist/vue-masonry-plugin-window.js"></script>
    <style type="text/css"><!--
    #app {
      background: #fff;
      border-radius: 4px;
      padding: 20px;
      transition: all 0.2s;
    }
    .item{
      width: 150px;
      border: 1px solid #ddd;
      justify-content: center;
      align-items: center;
      display: flex;
    }
    .item1 {
      height: 50px;
    }
    .item2 {
      height: 100px;
    }
    .item3 {
      height: 150px;
    }
    -->
    </style>

  </head>
  <body>
    <div id="app">
      <select v-model="n">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="50">50</option>
      </select>
      <div v-masonry="'containerId'" transition-duration="0.3s" item-selector=".item">
        <div v-masonry-tile class="item" :class="addClass(index)" v-for="(item, index) in Number(n)">
          {{item}}
          <?php
            $str = "abcdefghijklmnopqrstuvwxyzあいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみいむめもやゆよわいうえを";
            // echo $str;
          ?>
        </div>
      </div>
    </div>
    <script>
      const VueMasonryPlugin = window["vue-masonry-plugin"].VueMasonryPlugin;
      Vue.use(VueMasonryPlugin)

      let app = new Vue({
        el: '#app',
        data: {
          n: 5
        },
        methods: {
          addClass: function(i){
            let min = 1 ;
            let max = 3 ;
            let random = Math.floor( Math.random() * (max + 1 - min) ) + min ;
            return 'item' + random;
          }
        }
      });
    </script>
  </body>
</html>



