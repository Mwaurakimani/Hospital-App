<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {route} from "ziggy-js";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import SelectInput from "@/Components/SelectInput.vue";
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import Checkbox from "@/Components/Checkbox.vue";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    first_name: '',
    last_name: '',
    middle_name: '',
    date_of_birth: '',
    gender: '',
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('dashboard.users.register.patient'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Add User</h2>
        </template>
        <div>
            <AuthenticationCard>
                <form @submit.prevent="submit">

                    <div class="mt-4">
                        <InputLabel for="first_name" value="First Name"/>
                        <TextInput
                            v-model="form.first_name"
                            type="text"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.first_name"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="last_name" value="Last Name"/>
                        <TextInput
                            v-model="form.last_name"
                            type="text"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.last_name"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="last_name" value="Middle Name"/>
                        <TextInput
                            v-model="form.middle_name"
                            type="text"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.middle_name"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="email" value="Email"/>
                        <TextInput
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.email"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="phone" value="Phone"/>
                        <TextInput
                            v-model="form.phone"
                            type="tel"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.phone"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="last_name" value="Date of birth"/>
                        <TextInput
                            v-model="form.date_of_birth"
                            type="date"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.date_of_birth"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="gender" value="Gender"/>
                        <SelectInput
                            v-model="form.gender"
                            class="mt-1 block w-full rounded"
                            required
                        >
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </SelectInput>
                        <InputError class="mt-2" :message="form.errors.gender"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="password" value="Password"/>
                        <TextInput
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.password"/>
                    </div>
                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password"/>
                        <TextInput
                            v-model="form.password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.password_confirmation"/>
                    </div>

                    <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                        <InputLabel for="terms">
                            <div class="flex items-center">
                                <Checkbox id="terms" v-model:checked="form.terms" name="terms" required/>

                                <div class="ms-2">
                                    I agree to the <a target="_blank" :href="route('terms.show')"
                                                      class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Terms
                                    of Service</a> and <a target="_blank" :href="route('policy.show')"
                                                          class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Privacy
                                    Policy</a>
                                </div>
                            </div>
                            <InputError class="mt-2" :message="form.errors.terms"/>
                        </InputLabel>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </PrimaryButton>
                    </div>
                </form>
            </AuthenticationCard>
        </div>
    </AppLayout>
</template>

<style lang="scss" scoped>
@use "./index";
</style>
