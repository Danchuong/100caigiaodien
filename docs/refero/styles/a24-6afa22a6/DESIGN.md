# A24 — Refero Style

- Refero URL: https://styles.refero.design/style/6afa22a6-bec8-47c3-b5ee-5d11d64902cb
- Site URL: https://a24films.com
- ID: 6afa22a6-bec8-47c3-b5ee-5d11d64902cb
- Theme: light
- Industry: media
- Created: 2026-04-30T00:40:24.980Z
- Ranks: newest: 733, popular: 798, trending: 699

> Monochromatic cinematic gallery.

## Description

A24’s visual design is a stark, high-contrast exploration of cinematic black and white. It features an almost entirely achromatic palette, punctuated by bold, unapologetic typography that dictates hierarchy through size and placement rather than color. Layouts are spacious, almost sparse, creating a gallery-like feel where content commands attention. Interactive elements are minimal, often border-only or ghost-like, preserving the strong monochromatic aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Fog | #eeeeee | neutral | Page background (dominant canvas for light theme) |
| Graphite | #888888 | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |
| Ash Gray | #cacaca | neutral | Subtle border accents, fine print text |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NB International Web | Inter | 400, 500 | 10px, 11px, 12px, 13px, 15px, 18px, 21px, 74px | 0.92, 1.00, 1.07, 1.20, 1.23, 1.30, 1.32, 1.33, 1.50, 1.67, 1.92 | Primary typeface for all text content, including headings, body, and navigation. Its sans-serif geometry provides a crisp, modern feel, while varied letter spacing across sizes adapts its presence from impact to readability. The 'cpsp' feature indicates custom kerning for character spacing. |
| NB International Mono Web | Space Mono | 400 | 15px | 0.92 | Monospaced typeface used for specific data points or stylistic elements, offering a technical, precise contrast to the main font. Its characteristic tight letter spacing at 15px emphasizes its distinct, ordered appearance. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| heading-lg | 18 | 1.07 | -0.009 |
| display | 74 | 0.92 | -0.04 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "9px",
  "sectionGap": "96px",
  "cardPadding": "22px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button - Light Theme

**Role:** Interactive element (e.g., 'Shop Now', 'Listen Now')

Transparent background, Canvas White text and border, 0px border-radius, 6px padding. This light theme ghost button allows text to stand out against a dark background, becoming a subtle call to action without being visually heavy.

### Ghost Button - Dark Theme

**Role:** Interactive element (e.g., 'Shop Now', 'Listen Now')

Transparent background, Midnight Ink text and border, 0px border-radius, 6px padding. This dark theme ghost button maintains a minimal, unobtrusive interactive element against a light background.

### Newsletter Modal Input

**Role:** Email input field within modals

Transparent background with Canvas White text, Midnight Ink border matching the modal's foreground, 0px border-radius, 22px vertical padding and 18px horizontal padding. Complements the dark modal aesthetic.

### Newsletter Modal Button

**Role:** Submit button for newsletter signup

Transparent background with Canvas White text, Canvas White border, 0px border-radius, 6px padding. This accentuates the button against the dark modal background.

### Navigation Link - Primary

**Role:** Main navigation items

Text link using NB International Web, weight 500, with Midnight Ink for the light theme and Canvas White for the dark theme. Underlines appear on hover/active states, not as static elements.

### Navigation Link - Muted

**Role:** Secondary navigation items or footer links

Text link using NB International Web, weight 400, in Graphite. Used for less prominent navigation elements to provide a subtle hierarchy.

### Modal Overlay

**Role:** Background for pop-up modals

Solid Midnight Ink background, often appearing as an opaque layer over content. Provides a strong visual separation for focused interaction.

## Do's

- Use Midnight Ink (#000000) as the primary text color on light backgrounds and Canvas White (#FFFFFF) for text on dark backgrounds to ensure high contrast.
- Apply NB International Web at weight 400 for all body copy and standard UI text, reserving weight 500 for bolder headings and key callouts.
- Maintain a 0px border-radius across all interactive elements, containers, and images to enforce a sharp, deliberate aesthetic.
- Utilize Ghost Buttons (transparent background, text matching its border color) for all primary actions, distinguishing them with text color and subtle borders rather than solid fills.
- Employ consistent vertical spacing of 96px for main section separation, establishing a clear rhythm and generous breathing room between content blocks.
- Prioritize text and bold typography as the primary means of conveying visual hierarchy; avoid decorative elements or heavy gradients.
- Use NB International Mono Web 15px with -0.0650em letter spacing for any stylized metadata or specific emphasis where a precise, technical tone is needed.

## Don'ts

- Do not introduce saturated colors; the palette is strictly achromatic with black, white, and a range of grays.
- Avoid using box-shadows or other elevation techniques; the design relies on flat surfaces and high contrast for definition.
- Do not use default browser link styling; all links should be explicitly styled with NB International Web and only reveal an underline on hover/focus.
- Do not introduce rounded corners; all elements should adhere to the strict 0px border-radius.
- Avoid excessive imagery; when images are used, they should be high-contrast, often black and white, and serve a functional or editorial purpose within the gallery-like layout.
- Do not add heavy borders or background fills to buttons; maintain the ghost button aesthetic.
- Avoid centered text blocks for large content sections; prefer left-aligned typography for readability and structured presentation.

## Layout

The page primarily uses a max-width contained layout, though some sections, particularly on dark backgrounds, appear full-bleed. The hero pattern often involves a centered headline over a dark background or a split text+visual approach. Section rhythm is driven by alternating light (#eeeeee) and dark (#000000) bands, creating a distinct visual flow. Content is arranged in flexible patterns, including centered stacks for headlines and calls to action, as well as alternating text-left/image-right compositions. The absence of heavy grids creates a spacious, almost architectural feel. Navigation is handled by a minimal sticky top header with a hamburger menu for more options, reinforcing the clean, uncluttered aesthetic.

## Imagery

Imagery treatment varies. On light backgrounds, product shots often appear as contained, slightly offset elements. For editorials or film promotion, imagery can be full-bleed, high-contrast, black and white photography. There are no consistent rounded corners or masking; images are presented with sharp, raw edges. Icons are typically minimalist, outlined, and monochromatic, with a thin stroke weight. Imagery primarily serves to showcase products, present film stills or talent, and establish an editorial atmosphere, often functioning as large, impactful visual breaks between text-heavy sections. The density is moderate, allowing visuals to occupy significant space without overwhelming the text.

## Similar Brands

| Business | Why |
| --- | --- |
| Apple (Product Pages) | High-contrast, spacious layouts, and a focus on product visuals with minimal distracting UI elements, often using stark black and white. |
| Acne Studios | Minimalist, high-fashion aesthetic with a strong emphasis on typography, monochromatic palettes, and unconventional spacing for an editorial feel. |
| The New York Times | Strong typographic hierarchy, a largely achromatic palette for content, and clean, legible layout despite high information density (albeit different content focus). |
| SSENSE | Editorial style with large images, strong typography, and a deliberate use of white space, creating a gallery-like product display. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000 (Midnight Ink)
background: #eeeeee (Fog)
border: #000000 (Midnight Ink)
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: Midnight Ink background. Display headline 'THE NEXT CHAPTER' in Canvas White, 74px NB International Web, weight 500, letter-spacing -0.04em, line-height 0.92. Subheading 'Coming Soon' in Canvas White, 18px NB International Web, weight 400, line-height 1.07.
2. Create a 'Shop Now' ghost button for a light section: 'SHOP NOW' text in Midnight Ink, 15px NB International Web, weight 400. Transparent background, 1px Midnight Ink border, 0px radius, 6px padding.
3. Create a dark theme newsletter modal: Midnight Ink background, Canvas White text. Title 'WANT MORE A24?' in Canvas White, 21px NB International Web, weight 500. Email input with transparent background, Canvas White text, 1px Canvas White border, 0px radius, 22px vertical, 18px horizontal padding. 'SIGN UP' button with Canvas White text, 1px Canvas White border, transparent background, 0px radius, 6px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509600056-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509600056-thumb.jpg |
