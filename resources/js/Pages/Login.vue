<template>
    <div>
        <div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="assets/img/media/hmongshop.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex">
												<a href="index.html">
                                                <img src="assets/img/brand/icon.png" class="sign-favicon-a ht-40" alt="logo">
												<img src="assets/img/brand/favicon-white.png" class="sign-favicon-b ht-40" alt="logo">
												</a>
												<h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Hm<span>ong</span>Shop</h1>
											</div>
											<div class="card-sigin">
												<div class="main-signup-header">
													<h2>ສະບາຍດີ!</h2>
													<h5 class="fw-semibold mb-4">ກະລຸນາເຂົ້າສູ່ລະບົບ.</h5>

														<div class="form-group">
															<label>ອີເມວລ໌</label> <input class="form-control" placeholder="ປ້ອນອີເມວລ໌ ຂອງທ່ານ..." type="text" v-model="email">
														</div>
														<div class="form-group">
															<label>ລະຫັດຜ່ານ</label> <input class="form-control" placeholder="ປ້ອນລະຫັດຜ່ານ ຂອງທ່ານ..." @keyup.enter="Login()" type="password" v-model="password">
														</div><button class="btn btn-main-primary btn-block" @click="Login()">ເຂົ້າສູ່ລະບົບ</button>

														<div class="alert alert-warning mt-2" role="alert" v-if="ShowError">
                                                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong>ແຈ້ງເຕືອນ!</strong> {{texterror}}
                                                    </div>


													<div class="main-signin-footer mt-5">

														<p>ຍັງບໍ່ມີບັນຊີຜູ້ໃຊ້? <router-link to="/register">ລົງທະບຽນໃໝ່</router-link></p>
													</div>
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
    name: 'MyWebAppLogin',

    data() {
        return {
            email:'',
			password:'',
			ShowError:false,
			texterror:''
        };
    },

    mounted() {

    },

    methods: {
        Login(){

			if(this.email != "" && this.password !=""){

				this.ShowError = false;
				this.texterror = "";

					this.$axios.post("api/login",
                        {
                            login_email: this.email,
                            login_password: this.password
                        }).then((response) => {

                            if(response.data.success){
                                //this.$router.push('login'); // ໄປໜ້າ Login
								window.location.href = "/store";
                            } else {
                                this.ShowError = true;
                                this.texterror = response.data.message;
                            }
                        }).cath(function(error){
                            console.error(error);
                        });


			} else {
				this.ShowError = true;
				this.texterror = "ກະລຸນາປ້ອນ ອີເມວລ໌ ແລະ ລະຫັດຜ່ານ!";
			}
		}
    },
	beforeRouteEnter(to, from, next){
			if(window.Laravel.isLoggedin_laravel){
				window.location.href = "/store";
			}

			next();
	}
};
</script>

<style lang="scss" scoped>

</style>
