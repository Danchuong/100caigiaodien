# teenage engineering — Refero Style

- Refero URL: https://styles.refero.design/style/aecf9dda-5cba-4dc7-9e73-59b65d895cdf
- Site URL: https://teenage.engineering
- ID: aecf9dda-5cba-4dc7-9e73-59b65d895cdf
- Theme: light
- Industry: other
- Created: 2026-04-01T16:17:54.000Z
- Ranks: newest: 969, popular: 70, trending: 54

> engineered precision against industrial gray

## Description

This system feels like a minimalist architectural blueprint, where products are spotlighted against a backdrop of muted industrial grays. The deliberate use of extremely thin custom typography, particularly for headings, creates a subtle, almost whispered authority. Interactive elements are marked by a singular vivid blue against a monochromatic field, acting like technical indicator lights. Sharp angles and high-contrast text on neutral surfaces define the system's precise and functional aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #f6f8f7 | neutral | Page background, primary display surface. |
| Graphite | #0f0e12 | neutral | Secondary surface, used for darker interactive states or background elements, often paired with lighter text. |
| Ink | #000000 | neutral | Primary text color for maximum contrast, borders, and some background elements in high-contrast sections. |
| Steel | #e5e5e5 | neutral | Muted text, subtle borders, and sometimes as a background fill for iconography or subtle navigation states. |
| Smoke | #b2b2b2 | neutral | Decorative borders around elements, muted text for secondary information. |
| Electric Blue | #0071bb | accent | Interactive elements, 'buy now' links, and accents. Its vividness draws attention to key actions. |
| Verdant Accent | #006837 | accent | Occasionally used for decorative fills, notably in SVG icons, less frequently for UI elements. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| te-20 | Inter | 100, 300 | 13px, 19px, 24px, 26px | 1.11, 1.15, 1.50 | General body text, navigation elements, links, and detailed product descriptions. The variety of thin weights keeps text light and airy. |
| te-40 | Inter | 300 | 40px | 1.11 | Headlines and prominent display text. The singular light weight (300) is a signature choice, creating an understated impact, making the text feel designed rather than shouted. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 |  |
| body | 19 | 1.15 |  |
| subheading | 24 | 1.11 |  |
| heading | 26 | 1.11 |  |
| display | 40 | 1.11 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "15px",
  "sectionGap": "66px",
  "cardPadding": "22px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Navigation element

Text links using te-20 font at 13px, weight 300, color Ink (#000000) on Canvas background. On hover, the text color changes to Electric Blue (#0071bb).

### Product Grid Item

**Role:** Product display

Displays products with 'EP-133 K.O. II' as heading text in te-20, size 19px, color Ink (#000000). A 'buy now' link is shown in Electric Blue (#0071bb) at 13px. Background is Canvas (#f6f8f7) with solid borders in Smoke (#b2b2b2) or Steel (#e5e5e5), with an element gap of 15px.

### Footer Link

**Role:** Utility link

Links within the footer use te-20 font, Steel (#e5e5e5) text color on a Graphite (#0f0e12) background.

### Promotional Banner (Top)

**Role:** Brand communication

A full-width banner at the top of the page with a Graphite (#0f0e12) background, featuring white icons and text. Uses te-20 at various sizes for labels and descriptors.

### Cookie Consent Banner

**Role:** Legal disclosure

A triangular overlay with a yellow background, black border, and black text. Contains two functional buttons: 'settings' and 'accept all'. Black text on yellow background for readability.

## Do's

- Prioritize the ultra-light 'te-20' and 'te-40' typefaces, especially for headlines, to maintain the brand's understated authority.
- Use Electric Blue (#0071bb) exclusively for interactive elements and calls to action.
- Implement high-contrast pairings of Ink (#000000) text on Canvas (#f6f8f7) backgrounds for primary content.
- Define clear visual hierarchy through font weights (te-40 for main headings, te-20 for body and smaller elements), rather than size alone.
- Maintain generous spacing with 15px for element gaps and 66px for section gaps, contributing to the 'comfortable' density.
- Employ Steel (#e5e5e5) and Smoke (#b2b2b2) for subtle borders and muted text to provide visual structure without heavy lines.
- Leverage the Canvas (#f6f8f7) background as the primary stage, ensuring products and content remain the focal point.

## Don'ts

- Avoid using bold or heavy font weights for headlines; the brand identity is built on a whisper-thin typographic aesthetic.
- Do not introduce new vibrant colors outside of Electric Blue (#0071bb) for interactive elements, as this dilutes the monochromatic focus.
- Refrain from adding decorative shadows or complex embellishments; the design system favors clean, flat surfaces.
- Do not use Electric Blue (#0071bb) for non-interactive text or purely decorative elements, as it's reserved for action.
- Avoid excessive rounding of corners; the design system maintains sharp, precise edge treatments.
- Do not allow text to crowd; ensure ample 15px element spacing and 66px section padding is consistently applied.

## Layout

The page primarily utilizes a max-width contained layout with centered content, though the main navigation and the hero section can stretch full-bleed visually. The hero typically features a large product image, often against a dark or gray background, with minimal, centered text elements. Sections maintain a consistent vertical rhythm, often separated by distinct background shifts between Canvas (#f6f8f7) and a darker neutral. Content is arranged in alternating image-left, text-right, or vice-versa patterns, and product displays often use a simple, predictable grid. Navigation is a prominent, full-width top bar, generally sticky or highly visible, using a high-contrast ink-on-canvas or steel-on-graphite palette.

## Imagery

The visual language focuses heavily on product photography, presenting devices in a precise, almost clinical manner. Products are often isolated or shown in context against plain, industrial gray or white backgrounds, emphasizing their form and detailing. The style is primarily clean and contained, with sharp edges and no visible rounding. Photography is brightly lit, showcasing product textures and features clearly, avoiding lifestyle contexts. Icons are minimalist, outlined, and monochromatic, often using Steel (#e5e5e5) on darker backgrounds or Ink (#000000) on lighter ones, serving a functional and informational role.

## Similar Brands

| Business | Why |
| --- | --- |
| AIAIAI | Similar focus on minimalist product presentation, monochromatic UI with a single accent color, and precision-engineered feel. |
| Oura Ring | Clean, device-centric product photography and a refined, subtle typographic approach within a light theme. |
| Minimalist websites for audio equipment brands generally | Emphasis on showcasing the product itself, often with stark backgrounds and minimal UI interference. |
| Acme Made | Use of very thin, custom-looking sans-serif fonts for branding and product names, creating an understated but premium feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f6f8f7
border: #e5e5e5
accent: #0071bb
primary action: no distinct CTA color

Example Component Prompts:
Create a product card for an item named 'EP-133 K.O. II'. The main text is 'EP-133 K.O. II' in te-20 weight 300 at 19px, color Ink (#000000). Below that, add a sub-text 'buy now' in te-20 weight 300 at 13px, color Electric Blue (#0071bb). The card background is Canvas (#f6f8f7) with 0px radius and a 1px border in Steel (#e5e5e5). Maintain an element gap of 15px between text elements.

Generate a dark navigation bar. Background is Graphite (#0f0e12). Links like 'products' are in te-20 weight 300 at 13px, color Steel (#e5e5e5). Icons are also color Steel (#e5e5e5). The navigation should be full-width with 66px padding on the sides.

Design a footer section. Background color Graphite (#0f0e12). All text links, such as 'newsletter' or 'contact', should be in te-20 weight 300 at 13px, color Steel (#e5e5e5). The footer has 33px padding top and bottom and 66px padding left and right.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777419221525-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777419221525-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/aecf9dda-5cba-4dc7-9e73-59b65d895cdf-1777567233435-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/aecf9dda-5cba-4dc7-9e73-59b65d895cdf-1777567233435-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/aecf9dda-5cba-4dc7-9e73-59b65d895cdf-1777567233435-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/aecf9dda-5cba-4dc7-9e73-59b65d895cdf-1777567233435-preview-detail-poster.jpg |
