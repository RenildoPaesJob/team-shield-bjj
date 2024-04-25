import{W as u,j as e,a as h}from"./app-a963cff3.js";import{A as p}from"./AuthenticatedLayout-8e4f531e.js";import{I as n}from"./InputError-ac751961.js";import{I as o}from"./InputLabel-2c241290.js";import{T as m}from"./TextInput-00f6c3c0.js";import{S as j}from"./SecondaryButton-b5fa3b5a.js";import{N as g}from"./NavLinkSimple-a5486409.js";import"./transition-4d239976.js";import"./LogoShieldTeam-74d25980.js";function P({auth:i,dataStudent:t}){const{data:l,setData:r,patch:d,processing:v,reset:x,errors:s}=u({name:t.name,lastname:t.lastname,email:t.email,smartphone:t.smartphone,date_birth:t.date_birth,belt:t.belt,graduation:t.graduation}),c=a=>{a.preventDefault(),d(route("student.update",t.id)),x()};return e.jsxs(p,{user:i.user,header:e.jsx("h2",{className:"font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight",children:"🚀 Editar Aluno 🚀"}),children:[e.jsx(h,{title:"🚀 Editar Aluno 🚀"}),e.jsx("div",{className:"py-12",children:e.jsx("div",{className:"max-w-7xl mx-auto sm:px-6 lg:px-8",children:e.jsx("div",{className:"bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg",children:e.jsx("div",{className:"p-6 text-gray-900 dark:text-gray-100",children:e.jsxs("div",{className:"dark:text-white",children:[e.jsx("h1",{className:"text-center justify-center mb-4 text-2xl",children:"🚀 Editar Aluno 🚀"}),e.jsx("form",{onSubmit:c,children:e.jsxs("div",{className:"flex flex-col px-16",children:[e.jsx(o,{htmlFor:"name",value:"Nome",className:"text-xl"}),e.jsx(m,{id:"name",type:"text",name:"name",value:l.name,placeholder:"Digite o nome do aluno",className:"text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2",autoComplete:"username",isFocused:!0,onChange:a=>r("name",a.target.value)}),e.jsx(n,{message:s.name,className:"mb-3"}),e.jsx(o,{htmlFor:"lastname",value:"Sobrenome",className:"text-xl"}),e.jsx(m,{id:"lastname",type:"text",name:"lastname",placeholder:"Digite o sobrenome do aluno",value:l.lastname,className:"text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2",autoComplete:"lastname",isFocused:!0,onChange:a=>r("lastname",a.target.value)}),e.jsx(n,{message:s.lastname,className:"mb-3"}),e.jsx(o,{htmlFor:"email",value:"E-mail",className:"text-xl"}),e.jsx(m,{id:"email",type:"email",name:"email",value:l.email,placeholder:"Digite o e-mail do aluno",className:"text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2",autoComplete:"email",isFocused:!0,onChange:a=>r("email",a.target.value)}),e.jsx(n,{message:s.email,className:"mb-3"}),e.jsx(o,{htmlFor:"smartphone",value:"Celular",className:"text-xl"}),e.jsx(m,{id:"smartphone",type:"text",name:"smartphone",value:l.smartphone,placeholder:"Digite o n° celular do aluno",className:"text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2",autoComplete:"smartphone",isFocused:!0,onChange:a=>r("smartphone",a.target.value)}),e.jsx(n,{message:s.smartphone,className:"mb-3"}),e.jsx(o,{htmlFor:"date_birth",value:"Data de Nascimento",className:"text-xl"}),e.jsx(m,{id:"date_birth",type:"date",name:"date_birth",value:l.date_birth,className:"text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2",autoComplete:"date_birth",isFocused:!0,onChange:a=>r("date_birth",a.target.value)}),e.jsx(n,{message:s.date_birth,className:"mb-3"}),e.jsx(o,{htmlFor:"belt",value:"Faixa",className:"text-xl"}),e.jsxs("select",{id:"belt",name:"belt",value:l.belt,className:"rounded-md dark:text-black text-lg mb-3 p-2",autoComplete:"belt",onChange:a=>r("belt",a.target.value),children:[e.jsx("option",{value:"0",selected:!0,children:"Selecione"}),e.jsx("option",{value:"Branca",children:"Branca"}),e.jsx("option",{value:"Cinca e Branca",children:"Cinca e Branca"}),e.jsx("option",{value:"Cinza",children:"Cinza"}),e.jsx("option",{value:"Cinza e Preta",children:"Cinza e Preta"}),e.jsx("option",{value:"Amarela e Branca",children:"Amarela e Branca"}),e.jsx("option",{value:"Amarela",children:"Amarela"}),e.jsx("option",{value:"Amarela e Preta",children:"Amarela e Preta"}),e.jsx("option",{value:"Laranja e Branca",children:"Laranja e Branca"}),e.jsx("option",{value:"Laranja",children:"Laranja"}),e.jsx("option",{value:"Laranja e Preta",children:"Laranja e Preta"}),e.jsx("option",{value:"Verde e Branca",children:"Verde e Branca"}),e.jsx("option",{value:"Verde",children:"Verde"}),e.jsx("option",{value:"Verde e Preta",children:"Verde e Preta"}),e.jsx("option",{value:"Azul",children:"Azul"}),e.jsx("option",{value:"Roxa",children:"Roxa"}),e.jsx("option",{value:"Marrom",children:"Marrom"}),e.jsx("option",{value:"Preta",children:"Preta"})]}),e.jsx(n,{message:s.belt,className:"mb-3"}),e.jsx(o,{htmlFor:"graduation",value:"Grau",className:"text-xl"}),e.jsxs("select",{id:"graduation",name:"graduation",value:l.graduation,className:"rounded-md dark:text-black text-lg mb-3 p-2",autoComplete:"graduation",onChange:a=>r("graduation",a.target.value),children:[e.jsx("option",{value:"1",children:"1°"}),e.jsx("option",{value:"2",children:"2°"}),e.jsx("option",{value:"3",children:"3°"}),e.jsx("option",{value:"4",children:"4°"}),e.jsx("option",{value:"5",children:"5°"}),e.jsx("option",{value:"6",children:"6°"}),e.jsx("option",{value:"7",children:"7°"}),e.jsx("option",{value:"8",children:"8°"}),e.jsx("option",{value:"9",children:"9°"})]}),e.jsx(n,{message:s.graduation,className:"mb-3"}),e.jsxs("div",{className:"py-2 justify-end flex mb-4",children:[e.jsx(g,{href:route("student.index"),children:"Voltar",className:"mr-2 hover:bg-yellow-400 dark:hover:text-black text-xl"}),e.jsx(j,{className:"dark:hover:text-black hover:bg-green-500 text-xl",type:"submit",children:"Salvar"})]})]})})]})})})})})]})}export{P as default};