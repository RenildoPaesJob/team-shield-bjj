import { FormEventHandler } from 'react';
import { Head, useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

import { PageProps } from '@/types';
import { Payments } from '@/types/payment';

import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';
import SecondaryButton from '@/Components/SecondaryButton';
import NavLinkSimple from '@/Components/NavLinkSimple';
import moment from 'moment';

export default function EditPayment({ auth, payment }: PageProps<{ payment: Payments[] | any }>) {
	console.log('🚀 payment:', payment)
	const { data, setData, patch, processing, reset, errors } = useForm({
		name      : payment.student.name,
		lastname  : payment.lastname,
		email     : payment.email,
		smartphone: payment.smartphone,
		date_birth: payment.date_birth,
		belt      : payment.belt,
		graduation: payment.graduation,
	})

	const submit: FormEventHandler = (e) => {
		e.preventDefault()

		patch(route('student.update', payment.id))

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
								<h1 className="text-center justify-center mb-4 text-2xl">{`🚀 Aluno ${payment.student.name} 🚀`}</h1>

								<form onSubmit={submit}>

									<div className="px-16 grid grid-col-2 grid-row-col">

										<InputLabel htmlFor="name" value="Nome do aluno" className="text-xl" />
										<TextInput
											type="text"
											name="name"
											value={data.name}
											className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
										/>
									</div>

									<div className="px-16 justify-between grid grid-cols-3 grid-flow-col">
										<div>
											<InputLabel htmlFor="payment_date" value="Último Pagamento" className="text-xl" />
											<TextInput
												type="text"
												name="payment_date"
												value={moment(payment.payment_date).format("DD/MM/YYYY")}
												className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 text-center"
											/>
										</div>

										<div>
											<InputLabel htmlFor="reference_month" value="Mês de Referência" className="text-xl" />
											<TextInput
												type="text"
												name="reference_month"
												value={moment(payment.reference_month).format("DD/MM/YYYY")}
												className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 text-center"
											/>
										</div>

										<div>
											<InputLabel htmlFor="vencimento" value="Vencimento" className="text-xl" />
											<TextInput
												type="text"
												name="vencimento"
												value={moment(payment.payment_date).add(1, 'M').format("DD/MM/YYYY")}
												className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 text-center"
											/>
										</div>

										<div>
											<InputLabel htmlFor="payment_method" value="Forma de Pagamento" className="text-xl" />
											<TextInput
												type="text"
												name="payment_method"
												value={payment.payment_method}
												className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2 text-center"
											/>
										</div>
									</div>

									<div className="px-16 grid grid-col-2 grid-row-col">
										<InputLabel htmlFor="notes" value="Observações" className="text-xl" />
										<TextInput
											type="text"
											name="notes"
											value={payment.notes || `Sem Observações!`}
											className="text-black text-lg font-medium rounded-md dark:bg-gray-200 mb-3 p-2"
										/>
									</div>

									<div className="py-2 justify-end flex px-14">
										<NavLinkSimple
											href={route('payment.index')}
											children='Voltar'
											className='mr-2 hover:bg-yellow-400 dark:hover:text-black text-xl'
										/>
										<SecondaryButton
											className="dark:hover:text-black hover:bg-green-500 text-xl"
											type="submit"
										>
											Salvar
										</SecondaryButton>
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