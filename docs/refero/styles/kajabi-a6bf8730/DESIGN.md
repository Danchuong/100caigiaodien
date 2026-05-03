# Kajabi — Refero Style

- Refero URL: https://styles.refero.design/style/a6bf8730-6515-4a47-9d5f-927e1e0c67d5
- Site URL: https://kajabi.com
- ID: a6bf8730-6515-4a47-9d5f-927e1e0c67d5
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:49:36.595Z
- Ranks: newest: 688, popular: 1102, trending: 1110

> Crisp monochrome command panel on a limitless white canvas.

## Description

Kajabi's design system is a high-contrast, modern aesthetic pairing deep, commanding neutrals with crisp white surfaces. Typography is the primary visual driver, featuring compact, confident sans-serif headlines and functional body text. Components are minimalist and structured, emphasizing clear information hierarchy over decorative flourishes, with sharp edges and subtle radius rounding maintaining a serious, professional tone.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0a0a0a | neutral | Primary text, dark surface backgrounds, button fills, and strong borders. This color provides a deep, commanding presence |
| Canvas White | #ffffff | neutral | Page backgrounds, light card surfaces, button text. It serves as the expansive, clean base layer |
| Charcoal Surface | #1f1f1e | neutral | Elevated dark card backgrounds, distinct sections requiring visual separation from Midnight Ink |
| Ash Gray | #e9e8e7 | neutral | Subtle section backgrounds, providing a soft lift from Canvas White without introducing strong color |
| Slate Text | #535250 | neutral | Secondary text, muted links, subtle borders for less prominent elements |
| Silver Border | #e0dedc | neutral | Hairline borders, subtle dividers. A very light gray that prevents harsh lines |
| Stone Accent | #949189 | neutral | Muted icon fills, inactive states, and tertiary text |
| Green Accent | #405b50 | accent | Rare decorative accents, such as a background highlight for specific sections. Its near-gray saturation allows it to blend into the neutral palette |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Haffer | Inter | 400, 500, 600 | 12px, 14px, 16px, 20px, 24px, 28px, 32px, 40px, 48px, 60px | 1.00, 1.10, 1.20, 1.43, 1.45, 1.50 | Used universally across headlines, body text, links, and buttons. Its varied weights and negative letter-spacing contribute to the compact, self-assured character of the interface, making text feel deliberate and modern. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.45 |  |
| body | 16 | 1.45 |  |
| subheading | 20 | 1.43 |  |
| heading-sm | 24 | 1.2 |  |
| heading | 32 | 1.2 |  |
| heading-lg | 40 | 1.1 | -0.6 |
| display | 60 | 1 | -1.8 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "15984px",
    "default": "2px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Dark Button

**Role:** Call-to-action button for initiating key actions.

Filled with Midnight Ink (#0a0a0a), Canvas White (#ffffff) text, 2px border-radius, with 12px vertical and 24px horizontal padding. Uses Haffer font, weight 400.

### Ghost Light Button

**Role:** Secondary action or navigational link with low visual hierarchy.

Transparent background, Canvas White (#ffffff) text and 1px border, 2px border-radius, with 12px padding. Uses Haffer font, weight 400.

### Light Button

**Role:** Positive action button where contrast is needed against a dark background.

Filled with Canvas White (#ffffff), Midnight Ink (#0a0a0a) text, 2px border-radius, with 12px vertical and 24px horizontal padding. Uses Haffer font, weight 400.

### Input Field

**Role:** Standard input for user data entry.

Transparent background, Slate Text (#333333) for input value, Midnight Ink (#000000) bottom border, with 12px vertical and 16px horizontal padding. Uses Haffer font.

### Dark Card

**Role:** Container for content within dark sections.

Charcoal Surface (#1f1f1e) background, 4px border-radius, with 40px all-around padding. No box-shadow.

### Transparent Content Card

**Role:** A minimal, borderless grouping element often used for media or subtle content organization.

Transparent background, 0px border-radius, and 0px padding. Primarily used for visual arrangements without defined boundaries.

## Do's

- Prioritize Haffer typography for all text elements, maintaining negative letter-spacing for larger sizes to achieve a compact aesthetic.
- Use Midnight Ink (#0a0a0a) for primary text and dark backgrounds, and Canvas White (#ffffff) for page backgrounds and light surfaces, establishing the strong monochrome base.
- Apply a 2px border-radius consistently to all interactive elements and contained components like buttons and image frames.
- Establish clear visual hierarchy using distinct solid borders, defaulting to 1px wide lines using Silver Border (#e0dedc) for subtle separation.
- Maintain generous section and element spacing to provide ample breathing room, adhering to 4px increments; use Element Gap (8px) for individual elements and Card Padding (20px) for internal card content.
- Utilize Charcoal Surface (#1f1f1e) for elevated cards or distinct sections to create depth without relying on shadows.

## Don'ts

- Avoid decorative gradients or strong chromatic colors; restrict accents to Green Accent (#405b50) in specific, minimal use cases.
- Do not deviate from the Haffer font family; custom system fonts are not part of this brand's identity.
- Do not use box-shadows for elevation; rely on background color changes or borders to differentiate layers.
- Never create rounded corners greater than 2px on interactive elements unless designing specific pill-shaped components at 15984px.
- Avoid dense, information-heavy blocks; always ensure ample white space around content and within components.
- Do not use generic system UI elements; all components should map to the specified visual tokens.

## Layout

The page primarily uses a max-width contained layout, though the hero section is full-bleed with a centered headline over a dark background. Sections alternate between light and dark themes, creating distinct visual blocks. Content is often arranged in symmetrical stacks or two-column layouts with text and visuals balanced. Card grids are used for features, showcasing clear divisions between items. Overall density is comfortable, ensuring sufficient negative space.

## Imagery

The visual language for imagery is primarily photography: portrait-style headshots of individuals, cropped tightly and presented within square or slightly rounded frames. Product shots are also used, often contained with clean backgrounds. All imagery serves an explanatory or social proof role, rather than decorative. Iconography is minimalist, outlined, and monochromatic, integrated seamlessly into the text, retaining a lightweight feel.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | High-contrast monochrome palette with sans-serif type, structured layout, and emphasis on clear content blocks over decorative elements. |
| Linear | Clean, functional typography, dark mode options with minimal color accents, and a focus on clarity through strict visual hierarchy. |
| Webflow | Strategic use of dark and light sections, sharp edges or subtle rounding, and strong typographic presence for headlines. |
| Notion | Productivity-focused, clean UI with a strong emphasis on typography and a muted color palette, primarily distinguishing elements through background shades and subtle borders. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a0a0a
background: #ffffff
border: #e0dedc
accent: #405b50
primary action: #0a0a0a (filled action)

Example Component Prompts:
1. Create a hero section: Midnight Ink (#0a0a0a) background. Headline at 60px Haffer weight 600, Canvas White (#ffffff), letter-spacing -1.8px. Subtext at 20px Haffer weight 400, Canvas White (#ffffff), line-height 1.43. Include a Primary Dark Button.
2. Create a feature card: Ash Gray (#e9e8e7) background. Heading at 24px Haffer weight 500, Midnight Ink (#0a0a0a), line-height 1.2. Body text at 16px Haffer weight 400, Slate Text (#535250), line-height 1.45. Ensure 20px padding and a 2px border-radius.
3. Create a navigation link: Haffer font 16px weight 400, Slate Text (#535250), hover color Midnight Ink (#0a0a0a), with 24px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510148051-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510148051-thumb.jpg |
