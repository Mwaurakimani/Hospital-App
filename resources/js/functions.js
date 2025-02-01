import {usePage} from "@inertiajs/vue3";


// Guest Patient Nurse Doctor Administrator
const getAccountType = () => usePage().props.auth.user.account_type


export {getAccountType}
