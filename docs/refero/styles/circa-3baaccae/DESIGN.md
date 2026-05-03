# Circa — Refero Style

- Refero URL: https://styles.refero.design/style/3baaccae-2415-46c8-b71f-a45a002944aa
- Site URL: https://circa.so
- ID: 3baaccae-2415-46c8-b71f-a45a002944aa
- Theme: dark
- Industry: agency
- Created: 2026-04-30T02:08:44.534Z
- Ranks: newest: 433, popular: 1234, trending: 1241

> Minimal dark canvas, playful 3D forms

## Description

Circa employs a bold, dark minimalism softened by whimsical 3D illustrations. The interface is primarily achromatic, establishing a stark backdrop for content and interaction. Typography is understated yet precise, relying on subtle weight differences and careful letter-spacing for hierarchy. Components are lightweight, favoring ghost elements and soft, contained surfaces with subtle elevation for critical information.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #000000 | neutral | Page background (dominant), body text |
| Charcoal | #171717 | neutral | Muted text, ghost button text, icon strokes, active states for ghost buttons |
| Stone Gray | #737373 | neutral | Muted helper text, secondary icons |
| Frost White | #ffffff | neutral | Primary text, card backgrounds, ghost button backgrounds, active action button background |
| Silver Mist | #e6e6e6 | neutral | Hairline borders for components and form fields |
| Deep Graphite | #111111 | neutral | High-contrast neutral action fill for primary buttons on light surfaces. |
| Laurent Lime | #AFFF2C | brand | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Geist | Montserrat | 500 | 30px | 1.15 | Primary headings — weight 500 emphasizes clarity and modernism over traditional bold shouts, with subtle negative letter-spacing for a sophisticated feel. |
| Inter | System Font | 400, 500, 600 | 11px, 13px, 14px, 15px, 16px | 1.43, 1.50, 1.63 | Body copy, button text, and most UI elements — functional and legible across all sizes, forming the workhorse text of the system. |
| system-ui |  | 500 | 12px | 1.50 | Utility text for small components and system feedback, prioritizing native rendering speed and legibility at minimal sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 |  |
| body-sm | 13 | 1.5 |  |
| body | 14 | 1.5 |  |
| body-lg | 15 | 1.5 |  |
| heading-sm | 16 | 1.5 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "buttons": "4px",
    "pillButtons": "9999px"
  },
  "elementGap": "12px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Secondary actions, navigation links

Transparent background with Charcoal (#171717) text, 4px border-radius, no border. Focuses user on primary content while offering navigation.

### Pill Accent Button

**Role:** Small, informational labels or brand identifiers

Deep Graphite (#111111) background, Frost White (#ffffff) text, 9999px (pill) border-radius, 6px vertical padding, 12px horizontal padding. Features a subtle overlay shadow rgba(0, 0, 0, 0.05) 0px 1px 2px 0px.

### Dialog Card

**Role:** Modal dialogs, cookie settings, important notifications

Background Frost White (#ffffff), 12px border-radius, 24px padding on all sides. Elevated with a soft shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px.

### Default Action Button

**Role:** Primary calls to action within a dialog

Frost White (#ffffff) background, Ink Black (#000000) text, 6px border-radius, 20px horizontal padding. Features no explicit borders to blend with background surfaces.

### Muted Action Button

**Role:** Secondary actions within a dialog

Charcoal (#171717) background, Frost White (#ffffff) text, 6px border-radius, 20px horizontal padding. Provides a clear contrast for secondary options in dark contexts.

## Do's

- Prioritize Ink Black (#000000) as the dominant page background.
- Use Frost White (#ffffff) for primary text and Charcoal (#171717) or Stone Gray (#737373) for muted text and secondary information.
- Apply Geist font with a 500 weight for all hero-level headings, ensuring -0.6px letter-spacing.
- Maintain a 4px border-radius for interactive buttons and 12px for cards.
- Elevate critical UI elements like dialogs with soft shadows and a 12px border-radius.
- Utilize 12px as the standard element gap for arranging content within sections.
- Incorporate the Laurent Lime (#AFFF2C) only as a distinct brand accent for highlighted active states or illustrations.

## Don'ts

- Avoid using saturated colors for backgrounds or large content blocks; reserve them strictly for accents.
- Do not introduce strong, hard shadows; elevation should be subtle and blended.
- Refrain from heavy borders on components; use hairline #e6e6e6 borders where necessary for separation instead of framing.
- Do not deviate from the specified Inter font for body text or button labels.
- Avoid decorative gradients on UI components — keep surfaces flat and monochromatic.
- Do not use varied letter-spacing on body text; keep it at 'normal' for readability.
- Do not use dark backgrounds for cards or dialogs; these remain Frost White (#ffffff) against the Ink Black (#000000) canvas.

## Layout

The page uses a full-bleed layout with content centered horizontally. The hero section features animated 3D illustrations as its focal point, with centered text overlays. Content is primarily stacked vertically, demonstrating a strong emphasis on comfortable vertical spacing. Navigation is minimal, indicated by a single 'Made with Circa' label at the bottom right. The overall impression is one of spaciousness, letting the central illustration command attention.

## Imagery

Abstract, playful 3D illustrations serve as the primary visual element, depicting whimsical characters and architectural structures. These are full-bleed against the dark background, providing decorative atmosphere and brand personality. Icons are minimal, either outlined or filled, with a consistent stroke weight, often in Charcoal or Frost White to blend with the UI. The density is image-heavy in the hero area, with illustrations acting as the main point of engagement, while other visuals are purely functional icons.

## Elevation

| Element | Style |
| --- | --- |
| Pill Accent Button | rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |
| Dialog Card | rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Uses a dark canvas, highly sculptural 3D elements, and functional, minimal typography. |
| Linear | Features a dark UI with crisp, minimalist typography and subtle component styling. |
| Spline | Characterized by a dark aesthetic, heavy use of 3D illustrations, and clean UI components. |
| Read.cv | Employs an achromatic palette with careful type hierarchy and sparse, lightweight UI elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #e6e6e6
accent: #AFFF2C
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary headline: 'Something new is coming' using Geist, weight 500, size 30px, line-height 1.15, letter-spacing -0.6px, color #ffffff, centered on the page over an Ink Black (#000000) background.
2. Create a Dialog Card: a white (#ffffff) card with 12px border-radius, 24px padding, and shadow 'rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px'. Inside, a body text 'We use cookies...' in Inter, 14px, #737373.
3. Create a Pill Accent Button: 'Made with Circa' label as a button with Deep Graphite (#111111) background, Frost White (#ffffff) text (Inter, 11px), 9999px border-radius, 6px vertical padding, 12px horizontal padding, and shadow 'rgba(0, 0, 0, 0.05) 0px 1px 2px 0px'.
4. Create a Muted Action Button: 'Accept all' using Charcoal (#171717) background, Frost White (#ffffff) text (Inter, 15px), 6px border-radius, 20px horizontal padding, with a subtle border in Silver Mist (#e6e6e6).
5. Create a Ghost Button: 'Customize' button with transparent background, Charcoal (#171717) text (Inter, 15px), 4px border-radius, and a Silver Mist (#e6e6e6) border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514903801-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514903801-thumb.jpg |
