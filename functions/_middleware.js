export function onRequest(context) {
  const url = new URL(context.request.url);

  if (url.pathname === "/") {
    return Response.redirect(url.origin + "/motion/", 301);
  }

  return context.next();
}