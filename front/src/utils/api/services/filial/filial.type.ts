export interface SearchFilialRequest {
  include: string[]
  filter: {
    city_id: number
    is_active?: boolean
  }
}