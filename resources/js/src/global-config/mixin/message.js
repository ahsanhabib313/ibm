export default{
    methods:{
        toastMessage(type, message, icon, position, actionIcon){
            var toast = null;
            if(type == 'success'){
                toast = this.$toasted.success
            } else if(type == 'info'){
                 toast = this.$toasted.info     
            } else if(type == 'error'){
                 toast = this.$toasted.error    
            } else {

            }
            toast(message, {
                // theme:'bubble',
                icon:icon?icon:'check',
                position:position?position:'top-right',
                iconPack:'fontawesome',
                icon:icon?icon:'check',
                duration:2000,
                action: {
                    icon: actionIcon?actionIcon:'times',
                    class:'text-white',
                    onClick: (e, toastObject) => {
                        toastObject.goAway(0);
                    }
                },
            });
        },
    }
}