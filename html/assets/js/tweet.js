// tweet
var path = './batch/tweets_numbers.json';
var cache_path = "./batch/get-data-cache.json";
var tweet_obj = new Vue({
  el: '#tweet',
  data: {
    tweets: [],
    statistics: [],
  },
  created: function(){
    axios.get(path)
      .then(response => {
        this.tweets = response.data
      })
      .catch(err => {
        console.error(err)
      }),
    axios.get(cache_path)
      .then(response => {
        this.statistics = response.data
      })
      .catch(err => {
        console.error(err)
      })
  }
})

// blog posts
// var cache_path = "./batch/get-data-cache.json";
// var cache_data_obj = new Vue({
//   el: '#tweet',
//   data: {
//     statistics: [],
//   },
//   created: function(){
//     axios.get(path)
//       .then(response => {
//         this.statistics = response.data
//       })
//       .catch(err => {
//         console.error(err)
//       })
//   }
// })