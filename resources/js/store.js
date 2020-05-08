


export default {

    state:{
        category:[]
    },
    getters:{
        getCategory(state){
           return state.category;
        }
    },
    actions:{
        allCategory(context){
            axios.get('get/category')
                .then((resp)=>{
                    console.log(resp);
                    if (resp.data.success == 'OK') {
                        context.commit('categories',resp.data.category)
                    }
                })
                .catch((error)=>{

                })
        }
    },
    mutations:{
        categories(state,data){
            return state.category=data;

        }
    }
}
