<template lang="">
    <div
        class="hero min-h-screen"
        style="
            background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);
        "
    >
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center">
            <div class="max-w-md">
                <div class="mb-5 text-neutral-content">
                    <h1 class="text-5xl font-bold">CMS-Vue</h1>
                    <p>By @arjunapanji21</p>
                </div>
                <div class="card flex-shrink-0 w-80 shadow-2xl bg-base-100">
                    <div class="card-body">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Username</span>
                            </label>
                            <input
                                v-model="form.username"
                                type="text"
                                placeholder="Username"
                                class="input input-bordered w-full"
                            />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input
                                v-model="form.password"
                                type="password"
                                placeholder="password"
                                class="input input-bordered w-full"
                            />
                        </div>
                        <div class="form-control mt-6">
                            <button
                                @click="btn_submit()"
                                class="btn btn-primary"
                            >
                                Login
                            </button>
                        </div>
                        <label class="label justify-center">
                            <a href="#" class="label-text-alt link link-hover"
                                >Forgot password?</a
                            >
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import layout from "../../Layouts/default.vue";
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    layout: layout,
    setup(props) {
        const form = useForm({
            username: null,
            password: null,
        });
        return { form };
    },
    methods: {
        btn_submit() {
            this.form.post(route("login.auth"), {
                // onSuccess: () => {
                //     alert("Login Success!");
                // },
                // preserveScroll: true,
            });
        },
    },
};
</script>
<style lang=""></style>
