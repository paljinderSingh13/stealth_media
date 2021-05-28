<template>
<div>

    <div class="row">
               <div class="col-12">
                  <h3 class="hding-pos">{{data.name}} - <i><small>{{status_data[data.project_status]}}</small></i> </h3>
                  <div class="separator mb-5"></div>
               </div>
    <div class="col-6 border mr-1 border-dark border-radius">

        <h3 class="p-3 text-center">  Project Details   </h3>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Project Name </label>: {{data.name}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Client Name </label>: {{data.client_name}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Client Phone </label>: {{data.client_phone}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Client Email </label>: {{data.client_email}} </h5>
        <h5 class="border p-2 "> <label style="width:200px;">Client Address </label>: {{data.client_address}} </h5>

    </div>
    <div class="col-5 border border-dark border-radius">
         <h3 class="p-3 text-center">  Sale Information   </h3>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Sale Man </label>: <span v-if="data.sale"> {{data.sale.first_name}} {{data.sale.last_name}} </span></h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Start Date </label>: {{data.start_date}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Cost </label>: {{data.cost}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Technology </label>: {{data.technology}} </h5>
        <h5 class="border p-2 border-bottom-0 m-0 "> <label style="width:200px;">Monthly Maintaince </label>: {{data.monthly_maintenance}} </h5>
                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">SEO </label>: {{data.seo}} </h5>

    </div>

        <div class="col-12 border border-dark border-radius mt-4">
                     <h3 class="p-3 text-center">  Web Information   </h3>
            <div class="row">
                <div class="col-6  ">
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Web Info </label>: {{data.website_info}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Website url </label>:  {{data.website_url}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Test Url </label>: {{data.test_url}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Admin Panel Url </label>:  {{data.admin_panel_url}}</h5>
                     <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">User Name </label>: {{data.user_name}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;"> Password </label>:  {{data.password}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Domain Register By </label>: {{data.domain_register}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Additional Information </label>:  {{data.additional_information}}</h5>

                </div>
                 <div class="col-6  ">
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Email </label>: {{data.email}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Password</label>:  {{data.emal_password}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Special Request </label>  {{data.note}} </h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Project Testing </label>  {{data.project_testing}} </h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Google Review </label>  {{data.google_review}} </h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Hosted By </label>: {{data.hosted_by}}</h5>
                    <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Hosted On </label>:  {{data.hosted_on}}</h5>

                </div>
            </div>


        </div>

                <div class="col-12 border border-dark border-radius mt-4">
                     <h3 class="p-3 text-center">  Document File   </h3>
<div class="col-8 offset-2">
                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Web Scope File </label>:  <a v-if="data.webscope_file"  target="_blank"   :href="loc+'/sm/public/'+data.dir_path+'/'+data.webscope_file" >View File</a></h5>
                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Service Agreement File </label>:  <a v-if="data.service_agreement_file" target="_blank"  :href="loc+'/sm/public/'+data.dir_path+'/'+data.service_agreement_file" >View File</a></h5>

                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Seo Scope File </label>:  <a v-if="data.seo_scope_file" target="_blank"  :href="loc+'/sm/public/'+data.dir_path+'/'+data.seo_scope_file" >View File</a></h5>
                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Website Training File </label>:  <a v-if="data.website_training_file" target="_blank"  :href="loc+'/sm/public/'+data.dir_path+'/'+data.website_training_file" >View File</a></h5>
                <h5 class="border p-2 border-bottom-0 m-0"> <label style="width:200px;">Email Setup File </label>:  <a v-if="data.email_setup_file" target="_blank"  :href="loc+'/sm/public/'+data.dir_path+'/'+data.email_setup_file" >View File</a></h5>


</div>
                </div>
                <div class="col-12 mt-4">
                  <h3 class="hding-pos">Project Chat</h3>
                  <div class="separator mb-5"></div>
               </div>

               <div class="col-12" v-for="(chat, index)  in chats">
                    <h5 class="ml-4 mt-2"> <b v-if="chat.staff">{{chat.staff.first_name}} {{chat.staff.last_name}}</b> - {{chat.created_at}}</h5>
                    <div class="col-12 border border-dark border-radius ">
                        <h5 class="p-2 "> <b> Chat message {{index+1}}-</b> {{chat.comment}}

                        </h5>
                     </div>
                   </div>




              <div class="gorm-group pb-3 col-12 ml-3 mt-3">
                  <input type="text" v-model="comment" class="form-control">
              </div>
              <a @click="send" class="btn btn-success ml-5">Send</a>


            </div>
        </div>
</template>
<script>
export default{

    props:['detail_route','new_chat_route','chat_data'],
    data(){
        return{
            loc:window.location.origin,
            comment:'',
            chats:{},
            data:{},
            status_data:{1:'Fresh',2:'Design Ready & Waiting Approval',3:'Website Launched',
                                    4: 'Awaited Data'},

        }
    },
    created(){
        this.detail();
    },
    methods:{
        send(){

            axios.post(this.new_chat_route,{project_id:this.data.id, comment:this.comment}).then(res=>{
                console.log('working');
                 this.chatting();
            });

        },
        chatting(){

            axios.get(this.chat_data+this.data.id).then(res=>{
                this.chats = res.data;
            });
        },
        detail(){

            axios.get(this.detail_route).then(res=>{
                this.data = res.data;
                        this.chatting();

            });

        }

    }


}

</script>