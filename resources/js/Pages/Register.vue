<template>
    <div>
        <div class="row no-gutter justify-content-center">
				
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex">
												<a href="index.html"><img src="assets/img/brand/favicon.png" class="sign-favicon-a ht-40" alt="logo">
												<img src="assets/img/brand/favicon-white.png" class="sign-favicon-b ht-40" alt="logo">
												</a>
												<h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Va<span>le</span>x</h1>
											</div>
											<div class="main-signup-header">
												
												<h5 class="fw-normal mb-4">ພອມລົງທະບຽນ</h5>
												
													<div class="form-group">
														<label>ຊື່ຜູ້ໃຊ້</label> 
                                                        <input class="form-control" placeholder="ປ້ອນຊື່ຂອງທ່ານ" type="text" v-model="name">
													</div>
													<div class="form-group">
														<label>ອີເມວລ໌</label> <input class="form-control" placeholder="ປ້ອນອີເມວລ໌ຂອງທ່ານ..." v-model="email" type="text">
													</div>
													<div class="form-group">
														<label>ລະຫັດຜ່ານ</label> <input class="form-control" placeholder="ປ້ອນລະຫັດຜ່ານໃໝ່..." type="password" v-model="password">
													</div>
                                                    <div class="form-group">
														<label>ຍືນຍັນລະຫັດຜ່ານ</label> <input class="form-control" placeholder="ຍືນຍັນລະຫັດຜ່ານ..." type="password" v-model="password2">
													</div>
                                                    <button class="btn btn-main-primary btn-block" @click="Register()">ລົງທະບຽນ</button>
													
                                                    <div class="alert alert-warning mt-2" role="alert" v-if="ShowError">
                                                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong>ແຈ້ງເຕືອນ!</strong> {{texterror}}
                                                    </div>
												
												<div class="main-signup-footer mt-5">
													<p>ມີບັນຊີຜູ້ໃຊ້ແລ້ວ? <router-link to="/login">ເຂົ້າສູ່ລະບົບ</router-link></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
    </div>
</template>

<script>
export default {
    name: 'MyWebAppRegister',

    data() {
        return {
            name:'',
            email:'',
            password:'',
            password2:'',
            ShowError:false,
            texterror:''
        };
    },

    mounted() {
        
    },

    methods: {
        Register(){
            if(this.name == '' || this.email =='' || this.password ==''){
                this.ShowError = true;
                this.texterror = "ກະລຸນາກວດຊອບຂໍ້ມູນ ໃຫ້ຄົບຖ້ວນ!";
            } else {

                if(this.password == this.password2)
                    {
                        this.ShowError = false;
                        this.texterror = "";

                        /// ທຳການຍິງຂໍ້ມູນ ສົ່ງໄປ Back-end ໂດຍໃຊ້ axios
                        this.$axios.post("api/register",
                        {   re_name: this.name,
                            re_email: this.email,
                            re_password: this.password
                        }).then((response) => {
                            
                            if(response.data.success){
                                this.$router.push('login'); // ໄປໜ້າ Login
                            } else {
                                this.ShowError = true;
                                this.texterror = response.data.message;
                            }
                        }).cath(function(error){
                            console.error(error);
                        });

                    } else {
                        this.ShowError = true;
                        this.texterror = "ລະຫັດຜ່ານບໍ່ກົງກັນ!"
                    }
            }
        }
    },
    
};
</script>

<style lang="scss" scoped>

</style>