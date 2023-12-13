import InputError from "@/Components/InputError"
import InputLabel from "@/Components/InputLabel"
import SecondaryButton from "@/Components/SecondaryButton"
import TextInput from "@/Components/TextInput"
import { useForm } from "@inertiajs/react"
import { FormEventHandler, useEffect } from "react"

export default function NewStundent() {
	const { data, setData, post, processing, reset, errors } = useForm({
		name: '',
		lastname: '',
		date_birth: '',
		belt: '',
		graduation: '',
	})

	const submit: FormEventHandler = (e) => {
		e.preventDefault()

		post(route('stundent.store'))

		reset()
	};

	return (
		<div className="dark:text-white">
			<h1 className="text-center justify-center mb-4 text-2xl">🚀 Novo Aluno 🚀</h1>

			<form onSubmit={submit}>
				<div className="flex flex-col px-16">

					<InputLabel htmlFor="name" value="Nome" className="text-xl" />
					<TextInput
						id="name"
						type="text"
						name="name"
						value={data.name}
						className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
						autoComplete="username"
						isFocused={true}
						onChange={(e) => setData('name', e.target.value)}
					/>
					<InputError message={errors.name} className="mt-2" />

					<InputLabel htmlFor="lastname" value="Sobrenome" className="text-xl" />
					<TextInput
						id="lastname"
						type="text"
						name="lastname"
						value={data.lastname}
						className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
						autoComplete="lastname"
						isFocused={true}
						onChange={(e) => setData('lastname', e.target.value)}
					/>
					<InputError message={errors.lastname} className="mt-2" />

					<InputLabel htmlFor="date_birth" value="Data de Nascimento" className="text-xl" />
					<TextInput
						id="date_birth"
						type="date"
						name="date_birth"
						value={data.date_birth}
						className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
						autoComplete="date_birth"
						isFocused={true}
						onChange={(e) => setData('date_birth', e.target.value)}
					/>
					<InputError message={errors.date_birth} className="mt-2" />

					<InputLabel htmlFor="belt" value="Faixa" className="text-xl" />
						<select
							id="belt"
							name="belt"
							value={data.belt}
							className="rounded-md dark:text-black text-lg mb-3 p-2"
							autoComplete="belt"
							onChange={(e) => setData('belt', e.target.value)}
						>
							<option value="0" selected>Selecione</option>
							<option value="Branca">Branca</option>
							<option value="Cinca e Branca">Cinca e Branca</option>
							<option value="Cinza">Cinza</option>
							<option value="Cinza e Preta">Cinza e Preta</option>
							<option value="Amarela e Branca">Amarela e Branca</option>
							<option value="Amarela">Amarela</option>
							<option value="Amarela e Preta">Amarela e Preta</option>
							<option value="Laranja e Branca">Laranja e Branca</option>
							<option value="Laranja">Laranja</option>
							<option value="Laranja e Preta">Laranja e Preta</option>
							<option value="Verde e Branca">Verde e Branca</option>
							<option value="Verde">Verde</option>
							<option value="Verde e Preta">Verde e Preta</option>
							<option value="Azul">Azul</option>
							<option value="Roxa">Roxa</option>
							<option value="Marrom">Marrom</option>
							<option value="Preta">Preta</option>
						</select>
					<InputError message={errors.belt} className="mt-2" />

					<InputLabel htmlFor="graduation" value="Grau" className="text-xl" />
					<select
						id="graduation"
						name="graduation"
						value={data.graduation}
						className="rounded-md dark:text-black text-lg mb-3 p-2"
						autoComplete="graduation"
						onChange={(e) => setData('graduation', e.target.value)}
					>
						<option value="0" selected>Selecione</option>
						<option value="1">1°</option>
						<option value="2">2°</option>
						<option value="3">3°</option>
						<option value="4">4°</option>
						<option value="5">5°</option>
						<option value="6">6°</option>
						<option value="7">7°</option>
						<option value="8">8°</option>
						<option value="9">9°</option>
					</select>
					<InputError message={errors.graduation} className="mt-2" />

					<div className="py-2 justify-end flex mb-4">
						<SecondaryButton
							className="hover:bg-green-500 text-xl"
							type="submit"
						>
							Salvar
						</SecondaryButton>
					</div>
				</div>
			</form>
		</div>
	)
}