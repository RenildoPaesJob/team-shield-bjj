import DangerButton from "@/Components/DangerButton";
import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";

export default function NewStundent(){
	return (
		<div className="dark:text-white">
			<h1 className="text-center justify-center mb-4 text-2xl">🚀 Novo Aluno 🚀</h1>

			<form action={route('stundent.store')}>
				<div className="flex flex-col px-16">
					<label htmlFor="name" className="text-xl">Nome</label>
					<input className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3" type="text" name="name" id="name" />

					<label htmlFor="lastname" className="text-xl">Sobrenome</label>
					<input className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3" type="text" name="lastname" id="lastname" />

					<label htmlFor="date_birth" className="text-xl">Data de Nascimento</label>
					<input className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3" type="date" name="date_birth" id="date_birth" />

					<label htmlFor="belt" className="text-xl">Faixa</label>
					<select name="belt" id="belt" className="rounded-md dark:text-black text-lg mb-3">
						<option value="0" selected>Selecione</option>
					</select>

					<label htmlFor="graduation" className="text-xl">Graduação</label>
					<select name="graduation" id="graduation" className="rounded-md dark:text-black text-lg mb-3">
						<option value="0" selected>Selecione</option>
					</select>

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