import { PiEyeFill, PiPencilFill } from "react-icons/pi";

import { Payments } from "@/types/payment";
import NavLinkSimple from "@/Components/NavLinkSimple";
import DeleteForm from "@/Components/DeleteForm";

import moment from "moment";

interface ListPaymentProps {
	array: Payments[]
}

export default function ListPayment({ array }: ListPaymentProps) {
	return (
		<div className="py-4">
			<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
					<div className="p-6 text-gray-900 dark:text-gray-100">
						{
							array.length > 0 ?
								<table className="sm:w-auto md:w-full">
									<thead className="bg-gray-600">
										<tr>
											<th className="p-2">Nome</th>
											<th className="p-2">Email</th>
											<th className="p-2">Telefone</th>
											<th className="p-2">Último pagamento</th>
											<th className="p-2">Vencimento</th>
											<th className="p-2">Ações</th>
										</tr>
									</thead>
									<tbody>
										{array.length > 0 &&
											array.map(item => (
												<tr className="text-center" key={item.id}>
													<td className="p-2">{item.student.name}</td>
													<td className="p-2">{item.student.email}</td>
													<td className="p-2">{item.student.smartphone}</td>
													<td className="p-2">{moment(item.payment_date).format("DD/MM/YYYY")}</td>
													<td className="p-2">{moment(item.payment_date).add(1, 'M').format("DD/MM/YYYY")}</td>
													<td className="p-2">
														<NavLinkSimple
															href={route('payment.show', { id: item.id })}
															title="Ver Payment"
															children={<PiEyeFill />}
															className="bg-gray-500 p-3 mx-1 children-center justify-center align-middle rounded-md text-xl hover:bg-cyan-400 hover:text-black transition ease-in-out delay-150 duration-300"
														/>
														{/* <NavLinkSimple
															children={<PiPencilFill />}
															title="Editar Payment"
															href={route('payment.edit', { id: item.id })}
															className="bg-gray-500 p-3 mx-1 text-center justify-center align-middle rounded-md text-xl hover:bg-yellow-400 hover:text-black transition ease-in-out delay-150 duration-300"
														/> */}
														<DeleteForm
															title="Tem certeza que deseja excluir este Pagamento?"
															url="payment.destroy"
															id={item.id}
															className="max-w-xl"
														/>
													</td>
												</tr>
											))
										}
									</tbody>
								</table>
								:
								<h1>Cadastre uma nova Mensalidade!</h1>
						}
					</div>
				</div>
			</div>
		</div>
	)
}