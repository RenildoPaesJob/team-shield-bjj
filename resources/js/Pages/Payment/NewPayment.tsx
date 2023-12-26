import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import { PageProps } from '@/types';
import { FormEventHandler } from 'react';
import InputLabel from '@/Components/InputLabel';
import { Student } from '@/types/student';
import TextInput from '@/Components/TextInput';
import InputError from '@/Components/InputError';
import SecondaryButton from '@/Components/SecondaryButton';

export default function NewPayment({ auth, students }: PageProps<{ students: Student[] | null }>) {

	const { data, setData, post, processing, errors, reset } = useForm({
		'student_id': '',
		'amount_paid': '',
		'reference_month': '',
		'payment_method': '',
		'notes': ''
	});

	const submit: FormEventHandler = (e) => {
		e.preventDefault();

		post(route('payment.store'));
	};

	const studentsOptions = students?.map(item => (
		<option key={item.id} value={item.id}>{item.name}</option>
	))

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row'>
					<h2 className='font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2'>Novo Pagamento</h2>
				</div>
			}
		>
			<Head title='Novo pagamento' />

			<div className='py-4'>
				<div className='max-w-7xl mx-auto sm:px-6 lg:px-8'>
					<div className='bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg'>
						<div className='p-6 text-gray-900 dark:text-gray-100'>
							<form onSubmit={submit}>
								<div className='flex flex-row'>

									<div className='mr-4'>
										<InputLabel htmlFor='student_id' value='Aluno' className='text-xl' />
										<select
											id='student_id'
											name='student_id'
											value={data.student_id}
											className='rounded-md dark:text-black text-lg mb-3 p-2 md:w-64 dark:bg-gray-200'
											onChange={(e) => setData('student_id', e.target.value)}
										>
											<option value='0'>Selecione</option>
											{studentsOptions}
										</select>
									</div>

									<div className='mr-4'>
										<InputLabel htmlFor='amount_paid' value='Valor R$' className='text-xl' />
										<TextInput
											id='amount_paid'
											type='text'
											name='amount_paid'
											placeholder='R$ 60,00'
											value={data.amount_paid}
											className='text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 md:w-64'
											autoComplete='amount_paid'
											isFocused={true}
											onChange={(e) => setData('amount_paid', e.target.value.replace(',','.'))}
										/>
										<InputError message={errors.amount_paid} className='mt-2' />
									</div>

									<div className='mr-4'>
										<InputLabel htmlFor='reference_month' value='Mês de refêrencia' className='text-xl' />
										<TextInput
											id='reference_month'
											type='date'
											name='reference_month'
											value={data.reference_month}
											className='text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 md:w-64'
											autoComplete='reference_month'
											isFocused={true}
											onChange={(e) => setData('reference_month', e.target.value)}
										/>
										<InputError message={errors.reference_month} className='mt-2' />
									</div>

									<div className='mr-4'>
										<InputLabel htmlFor='payment_method' value='Forma de pagamento' className='text-xl' />
										<select
											id='payment_method'
											name='payment_method'
											value={data.payment_method}
											className='rounded-md dark:text-black text-lg mb-3 p-2 md:w-64 dark:bg-gray-200'
											autoComplete='payment_method'
											onChange={(e) => setData('payment_method', e.target.value)}
										>
											<option value='0' selected>Selecione</option>
											<option value='pix'>Pix</option>
											<option value='card'>Cartão</option>
										</select>
									</div>
								</div>

								<div className='justify-center flex flex-row'>
									<TextInput
										id='notes'
										type='text'
										name='notes'
										value={data.notes}
										placeholder='Observações (Opcional)'
										className='text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-4 w-1/2'
										autoComplete='notes'
										isFocused={true}
										onChange={(e) => setData('notes', e.target.value)}
									/>
								</div>

								<div className='flex justify-end mt-2'>
									<SecondaryButton
										className='hover:bg-green-500 text-xl'
										type='submit'
									>
										Salvar
									</SecondaryButton>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</AuthenticatedLayout>
	);
}