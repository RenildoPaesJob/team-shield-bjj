import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import { PageProps } from '@/types';
import { FormEventHandler, JSXElementConstructor, ReactElement, ReactNode, ReactPortal } from 'react';
import InputLabel from '@/Components/InputLabel';
import { Student } from '../../types/Student'

export default function NewPayment({ auth, students }: PageProps<{students: Student[]|null}>) {
	
	const { data, setData, post, processing, errors, reset } = useForm({
		'student_id'     : '',
		'payment_date'   : '',
		'amount_paid'    : '',
		'reference_month': '',
		'payment_status' : '',
		'payment_method' : '',
		'notes'          : ''
	});

	const submit: FormEventHandler = (e) => {
		e.preventDefault();

		post(route('password.store'));
	};

	const studentsOptions = students?.map(e => (

		<option key={e.id} value={e.id}>{e.name}</option>
	))

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row'>
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2">Novo Pagamento</h2>
				</div>
			}
		>
			<Head title="Novo pagamento" />

			<div className="py-4">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100 ">
							<div className="p-6 text-gray-900 dark:text-gray-100">
								<InputLabel htmlFor="name" value="Aluno" className="text-xl" />
								<select
									id="student_id"
									name="student_id"
									value={data.student_id}
									className="rounded-md dark:text-black text-lg mb-3 p-2 md:w-56"
									autoComplete="student"
									onChange={(e) => setData('student_id', e.target.value)}
								>
									<option value="0">Selecione</option>
									{studentsOptions}
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</AuthenticatedLayout>
	);
}