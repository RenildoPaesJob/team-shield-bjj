import{r as l,W as w,j as e}from"./app-f0dd2ff0.js";import{D as c,M as j}from"./Modal-fa834f14.js";import{I as g}from"./InputError-349b82e7.js";import{I as N}from"./InputLabel-8abb1967.js";import{S as D}from"./SecondaryButton-dad3672a.js";import{T as k}from"./TextInput-f9a2581e.js";import"./transition-311b88a5.js";function E({className:d=""}){const[i,r]=l.useState(!1),o=l.useRef(),{data:m,setData:u,delete:p,processing:x,reset:a,errors:y}=w({password:""}),f=()=>{r(!0)},h=t=>{t.preventDefault(),p(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>s(),onError:()=>{var n;return(n=o.current)==null?void 0:n.focus()},onFinish:()=>a()})},s=()=>{r(!1),a()};return e.jsxs("section",{className:`space-y-6 ${d}`,children:[e.jsxs("header",{children:[e.jsx("h2",{className:"text-lg font-medium text-gray-900 dark:text-gray-100",children:"Delete Account"}),e.jsx("p",{className:"mt-1 text-sm text-gray-600 dark:text-gray-400",children:"Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain."})]}),e.jsx(c,{onClick:f,children:"Delete Account"}),e.jsx(j,{show:i,onClose:s,children:e.jsxs("form",{onSubmit:h,className:"p-6",children:[e.jsx("h2",{className:"text-lg font-medium text-gray-900 dark:text-gray-100",children:"Are you sure you want to delete your account?"}),e.jsx("p",{className:"mt-1 text-sm text-gray-600 dark:text-gray-400",children:"Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account."}),e.jsxs("div",{className:"mt-6",children:[e.jsx(N,{htmlFor:"password",value:"Password",className:"sr-only"}),e.jsx(k,{id:"password",type:"password",name:"password",ref:o,value:m.password,onChange:t=>u("password",t.target.value),className:"mt-1 block w-3/4",isFocused:!0,placeholder:"Password"}),e.jsx(g,{message:y.password,className:"mt-2"})]}),e.jsxs("div",{className:"mt-6 flex justify-end",children:[e.jsx(D,{onClick:s,children:"Cancel"}),e.jsx(c,{className:"ms-3",disabled:x,children:"Delete Account"})]})]})})]})}export{E as default};
