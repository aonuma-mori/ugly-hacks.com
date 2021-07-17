// tweet
var path = './batch/tweets_numbers.json';
var tweet_obj = new Vue({
  el: '#tweet',
  data: {
    tweets: [],
  },
  created: function(){
    axios.get(path)
      .then(response => {
        this.tweets = response.data
      })
      .catch(err => {
        console.error(err)
      })
  }
})