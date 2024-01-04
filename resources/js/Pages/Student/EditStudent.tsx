import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import { PageProps } from '@/types';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';
import { FormEventHandler } from 'react';
import SecondaryButton from '@/Components/SecondaryButton';
import { Student } from '@/types/student';

export default function EditStudent({ auth, dataStudent }: PageProps<{ dataStudent: Student[] | any }>) {
	const { data, setData, post, processing, reset, errors } = useForm({
		name: '',
		lastname: '',
		email: '',
		smartphone: '',
		date_birth: '',
		belt: '',
		graduation: '',
	})

	const submit: FormEventHandler = (e) => {
		e.preventDefault()

		post(route('student.update', dataStudent.id))

		reset()
	};

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">🚀 Editar Aluno 🚀</h2>}
		>
			<Head title="🚀 Editar Aluno 🚀" />

			<div className="py-12">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100">
							<div className="dark:text-white">
								<h1 className="text-center justify-center mb-4 text-2xl">🚀 Editar Aluno 🚀</h1>

								<form onSubmit={submit}>
									<div className="flex flex-col px-16">

										<InputLabel htmlFor="name" value="Nome" className="text-xl" />
										<TextInput
											id="name"
											type="text"
											name="name"
											value={dataStudent.name}
											placeholder="Digite o nome do aluno"
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
											placeholder="Digite o sobrenome do aluno"
											value={dataStudent.lastname}
											className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
											autoComplete="lastname"
											isFocused={true}
											onChange={(e) => setData('lastname', e.target.value)}
										/>
										<InputError message={errors.lastname} className="mt-2" />

										<InputLabel htmlFor="email" value="E-mail" className="text-xl" />
										<TextInput
											id="email"
											type="email"
											name="email"
											value={dataStudent.email}
											placeholder="Digite o e-mail do aluno"
											className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
											autoComplete="email"
											isFocused={true}
											onChange={(e) => setData('email', e.target.value)}
										/>
										<InputError message={errors.email} className="mt-2" />

										<InputLabel htmlFor="smartphone" value="Celular" className="text-xl" />
										<TextInput
											id="smartphone"
											type="text"
											name="smartphone"
											value={dataStudent.smartphone}
											placeholder="Digite o n° celular do aluno"
											className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
											autoComplete="smartphone"
											isFocused={true}
											onChange={(e) => setData('smartphone', e.target.value)}
										/>
										<InputError message={errors.smartphone} className="mt-2" />

										<InputLabel htmlFor="date_birth" value="Data de Nascimento" className="text-xl" />
										<TextInput
											id="date_birth"
											type="date"
											name="date_birth"
											value={dataStudent.date_birth}
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
											value={dataStudent.belt}
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
											value={dataStudent.graduation}
											className="rounded-md dark:text-black text-lg mb-3 p-2"
											autoComplete="graduation"
											onChange={(e) => setData('graduation', e.target.value)}
										>
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
						</div>
					</div>
				</div>
			</div>
		</AuthenticatedLayout>
	);
}