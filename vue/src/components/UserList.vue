 <template>
  <div class="hello">
      <p>{{result}}</p>
  </div>
</template>

<script>
const axios = require('axios');
export default {
  name: 'UserList',
  props: {
    msg: String
  },
  data(){
   //result: null 
    return{
      result: []
    }
  }, 
  mounted:function() {
    //let self = this;
    axios.get('http://localhost:8000/api/users')
      .then(response => (this.result = response.data))
      .catch(function (error) {
        // handle error
        console.log(error);
      })
      .finally(function () {
        // always executed
        console.log('Finally Done');
      })
  }
}



</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
