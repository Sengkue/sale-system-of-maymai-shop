<template>
    <div>
        <div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">Sales monitoring dashboard template.</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						<div>
							<label class="tx-13">Customer Ratings</label>
							<div class="main-star">
								<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
							</div>
						</div>
						<div>
							<label class="tx-13">Online Sales</label>
							<h5>563,275</h5>
						</div>
						<div>
							<label class="tx-13">Offline Sales</label>
							<h5>783,675</h5>
						</div>
					</div>
				</div>
        <h1>Home 01</h1>
    </div>
</template>

<script>
export default {
    name: 'MyWebAppHome',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
	beforeRouteEnter(to, from, next){
			if(!window.Laravel.isLoggedin_laravel){
				window.location.href = "/login";
			}

			next();
	}
};
</script>

<style lang="scss" scoped>

</style>