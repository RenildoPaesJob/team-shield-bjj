import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import { PageProps } from '@/types';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';

import { Student } from '@/types/student';
import SecondaryButton from '@/Components/SecondaryButton';
import NavLinkSimple from '@/Components/NavLinkSimple';

export default function ShowStudent({ auth, student }: PageProps<{ student: Student[] | any }>) {

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">🚀 Visualizar Aluno 🚀</h2>}
		>
			<Head title="ver aluno" />

			<div className="py-12">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100">
							<div className="dark:text-white">
								<h1 className="text-center justify-center mb-4 text-2xl">{`🚀 Aluno ${student.name} 🚀`}</h1>

								<div className="flex flex-col px-16">

									<InputLabel htmlFor="name" value="Nome" className="text-xl" />
									<TextInput
										type="text"
										name="name"
										value={student.name}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="lastname" value="Sobrenome" className="text-xl" />
									<TextInput
										type="text"
										name="lastname"
										value={student.lastname}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="email" value="E-mail" className="text-xl" />
									<TextInput
										type="email"
										name="email"
										value={student.email}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="smartphone" value="Celular" className="text-xl" />
									<TextInput
										type="text"
										name="smartphone"
										value={student.smartphone}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="date_birth" value="Data de Nascimento" className="text-xl" />
									<TextInput
										type="date"
										name="date_birth"
										value={student.date_birth}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="belt" value="Faixa" className="text-xl" />
									<TextInput
										type="text"
										name="belt"
										value={student.belt}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="belt" value="Faixa" className="text-xl" />
									<TextInput
										type="text"
										name="belt"
										value={student.belt}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>

									<InputLabel htmlFor="graduation" value="Grau" className="text-xl" />
									<TextInput
										type="text"
										name="graduation"
										value={student.graduation}
										className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
									/>
									<div className="py-2 justify-end flex mb-4">
										<NavLinkSimple
											href={route('student.index')}
											children='Voltar'
											className='p-2 bg-white dark:bg-gray-800 border rounded-md hover:bg-green-500 text-xl hover:text-black transition ease-in-out delay-150 duration-300'
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</AuthenticatedLayout>
	);
}