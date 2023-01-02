<template>
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card card-img-holder">
							<div class="card-body list-icons">
								<div class="clearfix">
									<div class="float-end  mt-2">
										<span class="text-primary ">
											<i class="si si-basket-loaded tx-30"></i>
										</span>
									</div>
									<div class="float-start">
										<p class="card-text text-muted mb-1">ລາຍຮັບ</p>
										<h4>{{formatPrice(sum_income)}} ກີບ</h4>
									</div>
								</div>
								<div class="card-footer p-0">
									<p class="text-muted mb-0 pt-4"><i class="si si-arrow-down-circle text-warning me-1-20  me-2" aria-hidden="true"></i>Daily Orders</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card card-img-holder">
							<div class="card-body list-icons">
								<div class="clearfix">
									<div class="float-end  mt-2">
										<span class="text-primary ">
											<i class="si si-credit-card tx-30"></i>
										</span>
									</div>
									<div class="float-start">
										<p class="card-text text-muted mb-1">ລາຍຈ່າຍ</p>
										<h4>{{formatPrice(sum_expense)}} ກີບ</h4>
									</div>
								</div>
								<div class="card-footer p-0">
									<p class="text-muted mb-0 pt-4"><i class="si si-arrow-up-circle text-success me-2"></i>Less Sales</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card card-img-holder">
							<div class="card-body list-icons">
								<div class="clearfix">
									<div class="float-end  mt-2">
										<span class="text-primary">
											<i class="si si-chart tx-30"></i>
										</span>
									</div>
									<div class="float-start">
										<p class="card-text text-muted mb-1">ກຳໄລ</p>
										<h4>{{formatPrice(sum_profit)}} ກີບ</h4>
									</div>
								</div>
								<div class="card-footer p-0">
									<p class="text-muted mb-0 pt-4"><i class="si si-exclamation text-info me-2"></i>From
										Last Month</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card card-img-holder">
							<div class="card-body list-icons">
								<div class="clearfix">
									<div class="float-end  mt-2">
										<span class="text-primary">
											<i class="si si-social-facebook tx-30"></i>
										</span>
									</div>
									<div class="float-start">
										<p class="card-text text-muted mb-1">ສະຕ໋ອກສິນຄ້າ</p>
										<h3>{{formatPrice(store)}}</h3>
									</div>
								</div>
								<div class="card-footer p-0">
									<p class="text-muted mb-0 pt-4"><i class="si si-check me-1 text-primary me-2"></i>
										Recent History</p>
								</div>
							</div>
						</div>
					</div>
    </div>
</template>

<script>
export default {
    name: 'MyWebAppDashCard',

    data() {
        return {
            income:[],
            expense:[],
            store:[],
        };
    },

    mounted() {
        
    },
	computed:{
        sum_income(){
        return this.income.reduce((num, item) => num + item.price_sell, 0);
        },
        sum_expense(){
            return this.expense.reduce((num, item) => num + item.price_sell, 0);
        },
        sum_profit(){
            return this.sum_income-this.sum_expense;
        }
    },
    methods: {
		formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
        GetData(){

			this.$axios.get("/sanctum/csrf-cookie").then((response)=>{
				this.$axios.get(`/api/report/dashcard`)
				.then((response)=>{
						this.income = response.data.income;
						this.expense = response.data.expense;
						this.store = response.data.store;
				}).catch((error)=>{
					console.log(error);
				})

			});

		},
    },
	created(){
		this.GetData();
	}
};
</script>

<style lang="scss" scoped>

</style>