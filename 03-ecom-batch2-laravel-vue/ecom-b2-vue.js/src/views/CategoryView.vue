<template>
    <div class="category-view">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Shop Grid</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li><a href="javascript:void(0)">Shop</a></li>
                            <li>Shop Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="product-grids section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="product-sidebar">
                            <LeftSidebar/>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="product-grids-head">
                            <RightSidebar/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import LeftSidebar from "@/components/category/LeftSidebar";
    import RightSidebar from "@/components/category/RightSidebar";
    export default {
        name: "CategoryView",
        components:{LeftSidebar,RightSidebar}
    }
</script>

<style scoped>

</style>
