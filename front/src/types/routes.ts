export enum EAppRouteNames {
  Home = 'Quests',
  Quest = 'Quest',
  Contacts = 'Contacts',
  Certificates = 'Certificates',
  Holidays = 'Holidays',
  NotFound = 'NotFound',
}

export enum EAppRoutePaths {
  Home = '/',
  Quest = '/quest/:id',
  Contacts = '/contacts',
  Certificates = '/certificates',
  Holidays = '/holidays/:id',
  NotFound = '/:pathMatch(.*)*',
}
