# Hims App — Refero Style

- Refero URL: https://styles.refero.design/style/0a489bce-4f93-4b38-b612-d87b1d00999e
- Site URL: https://app.forhims.com
- ID: 0a489bce-4f93-4b38-b612-d87b1d00999e
- Theme: light
- Industry: other
- Created: 2026-04-30T02:35:41.928Z
- Ranks: newest: 340, popular: 173, trending: 121

> Rounded digital canvas.

## Description

The Hims App design system projects a clean, spacious, and subtly playful aesthetic. A generous use of white space and large, rounded corner elements creates an open, approachable feel. Typography is dominant, with large, bold headings drawing attention, while a single vivid violet provides a consistent brand accent. Shadows are soft and diffuse, adding a gentle sense of depth without harsh contrasts, framing content on the bright canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| App Brand Violet | #5d48db | brand | Major brand accent color for headings that announce key features and sections. The color choice ensures these elements are distinct and inviting |
| Canvas White | #ffffff | neutral | Primary background for the entire application, card surfaces, and key content blocks. Its extensive use creates an airy and unobstructed visual environment |
| Ink Black | #000000 | neutral | Primary text color for body copy, navigational elements, and strong headings. Provides high contrast against Canvas White for optimal legibility |
| Subtle Gray | #f0f0f0 | neutral | Background for secondary list items or subtle separators, providing a gentle visual break from pure white. Used for subtle text in less prominent UI elements |
| Deep Charcoal | #2e2e2e | neutral | Used for prominent heading text, offering a slightly softer alternative to Ink Black while maintaining strong contrast |
| Border Light Gray | #e0e0e0 | neutral | Fine borders and dividers for lists and subtle UI elements. Its lightness maintains the overall spacious and unburdened aesthetic |
| Muted Text Gray | #8f8f8f | neutral | Secondary and helper text, links in less prominent areas. Softens the text appearance for less critical information |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sofia | system-ui, sans-serif | 400, 500 | 14px, 16px, 18px, 20px, 24px, 32px, 35px, 37px, 39px, 44px, 81px, 84px, 85px, 141px, 220px, 280px | 1.00, 1.04, 1.10, 1.15, 1.18, 1.20, 1.25, 1.33, 1.43, 1.67, 2.44, 2.50, 2.78 | The primary typeface for all text content. Its clean, humanist characteristics support both large, impactful headlines and legible body copy, contributing to the app's friendly and accessible tone. The varied weights and sizes allow for a rich typographic hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 | -0.16 |
| body-sm | 16 | 1.33 | -0.19 |
| body | 18 | 1.25 | -0.22 |
| subheading | 20 | 1.2 | -0.24 |
| heading-sm | 24 | 1.15 | -0.29 |
| heading | 32 | 1.1 | -0.38 |
| heading-lg | 39 | 1.04 | -0.47 |
| display | 81 | 1 | -0.97 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "45px",
    "navigation": "52px",
    "genericComponent": "30px"
  },
  "elementGap": "20px",
  "sectionGap": "90px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Primary Header

**Role:** Top navigation bar

A fixed element at the top of the page, acting as the brand anchor and universal download call to action. Features the 'Hims & Hers' logo in Ink Black on Canvas White, with a 'Download now' button to the far right. No background fill, utilizing the page body as its background. Features a soft shadow rgba(0, 0, 0, 0.06) 0px 8px 30px 0px for subtle elevation.

### Download Now Button

**Role:** Primary Call to Action in header

Contained within the header, this button is Canvas White with Ink Black text, 52px border radius. It is a ghost button, defined only by its subtle shadow rgba(0, 0, 0, 0.06) 0px 8px 30px 0px and the text 'Download now'.

### Hero Section Card

**Role:** Prominent content container for hero sections

Large, rounded card used in the hero, often appearing as a device mockup frame. Background is Canvas White with a generous 45px border radius. Its prominence is established by a soft, spread-out shadow: rgba(0, 0, 0, 0.12) 0px 27px 104px 0px.

### Feature Section Heading

**Role:** Large, descriptive titles for major sections

Headings like 'Total care. Totally different.' use App Brand Violet (#5d48db) with a Sofia font, often at very large sizes (81px or 141px) and a line height of 1.0, and letter-spacing -0.0570em. These headings are the primary visual anchor for each content section.

### Informational Card

**Role:** General purpose content container

Used throughout the page for various content blocks. It has a Canvas White background and a 30px border radius, providing a softer boundary than sharp edges. Features a subtle shadow `rgba(0, 0, 0, 0.11) 0px 8px 127px 0px` for minimal uplift.

### List Item with Subtle Gray Background

**Role:** Standard list item for structured content

List items (e.g., in FAQ sections) have a Subtle Gray (#f0f0f0) background with Ink Black text. These items use Border Light Gray (#e0e0e0) for dividers, ensuring visual separation without heavy lines.

## Do's

- Always use Canvas White (#ffffff) as the primary background for all UI elements to maintain a spacious and clinical aesthetic.
- Apply App Brand Violet (#5d48db) sparingly, primarily for high-impact headings and key brand identifiers where a vibrant accent is desired.
- Utilize large border radii, specifically 45px for cards and 52px for interactive elements in the header, to promote a soft, approachable feel.
- Employ Sofia font for all text content, selecting weights 400 or 500 depending on hierarchy, and meticulously adjust letter-spacing as per the type scale.
- Introduce depth and hierarchy through soft, diffuse shadows like rgba(0, 0, 0, 0.12) 0px 27px 104px 0px for prominent cards, rather than hard lines or strong gradients.
- Maintain generous sectionGap of 90px and elementGap of 20px to ensure an uncluttered and spacious layout.
- Ensure all interactive elements, even ghost buttons, have a clearly defined shadow or border for discoverability.

## Don'ts

- Avoid using saturated background colors for primary content areas; stick to Canvas White or Subtle Gray to maintain visual lightness.
- Do not introduce sharp corners or small radii; the system's roundedness is a core visual identity.
- Refrain from heavy, opaque dividers or borders. Instead, use Border Light Gray (#e0e0e0) or Subtle Gray (#f0f0f0) backgrounds for visual separation.
- Do not apply bold or black text for every heading; utilize Deep Charcoal (#2e2e2e) for impactful but softer headings and Muted Text Gray (#8f8f8f) for secondary information.
- Avoid complex, multi-color gradient backgrounds on UI components; reserve gradients for large, atmospheric background elements if necessary, ensuring they are subtle.
- Do not use letter-spacing values tighter than -0.0570em for large display text or looser than default for body text.
- Do not cluster elements too closely; always respect the established elementGap of 20px and sectionGap of 90px.

## Layout

The page primarily employs a max-width contained layout, though the hero section often creates a sense of full-bleed through background gradients and centered elements on a Canvas White backdrop. The hero features a large, centered headline on a gradient background, followed by a prominently placed device mockup showcasing the app. Sections maintain a consistent vertical rhythm with a 90px sectionGap. Content is typically arranged in centered stacks or two-column text-left/image-right configurations. Call-to-action elements like the 'Download now' button are consistently placed in the top right of the sticky header. The composition feels spacious and organized, prioritizing legible content delivery.

## Imagery

The visual language for imagery is characterized by product screenshots within device mockups (specifically phones), often held by hands with diverse skin tones. These images serve a product showcase and explanatory role. Abstract and atmospheric gradients are used in the background to provide mood without distracting from the central product. Icons are filled, bold, and black, representing objects or concepts directly without extraneous detail, emphasizing clear communication. Imagery is contained within rounded frames or device screens, emphasizing integration rather than raw, full-bleed visuals. Visuals are dominant within sections, balancing text-heavy areas.

## Elevation

| Element | Style |
| --- | --- |
| Card (Large) | rgba(0, 0, 0, 0.12) 0px 27px 104px 0px |
| Card (Standard) | rgba(0, 0, 0, 0.11) 0px 8px 127px 0px |
| Header Navigation | rgba(0, 0, 0, 0.06) 0px 8px 30px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Calm | Shares a spacious, clean aesthetic with generous white space and soft, rounded UI elements. |
| Headspace | Similar use of soothing background gradients paired with simple, bold typography and product-focused imagery within device frames. |
| Apple | Employs an emphasis on clear typography, prominent product showcases (device mockups), and clean, uncluttered layouts. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e0e0e0
accent: #5d48db
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with a 'Total care. Totally different.' heading: background is a gradient from rgb(150, 133, 255) to rgb(181, 173, 225). Headline 'Total care. Totally different.', color #5d48db, sofia weight 500, size 81px, lineHeight 1.0, letter-spacing -0.97px. Below the headline, place a device mockup within a Canvas White (#ffffff) card with 45px border-radius and shadow rgba(0, 0, 0, 0.12) 0px 27px 104px 0px.
2. Design a feature card for 'Care': Canvas White (#ffffff) background, 30px border-radius, shadow rgba(0, 0, 0, 0.11) 0px 8px 127px 0px. Inside, use a Sofia weight 500 heading, size 32px, Ink Black (#000000), lineHeight 1.1, letter-spacing -0.38px; and body text in Sofia weight 400, size 18px, Muted Text Gray (#8f8f8f), lineHeight 1.25. Use 32px cardPadding.
3. Create a header navigation bar: Height fixed at approximately 70px. Left: 'hims & hers' logo in Ink Black (#000000). Right: ghost 'Download now' button with Ink Black (#000000) text, Sofia weight 500, size 14px, 52px border-radius, shadow of rgba(0, 0, 0, 0.06) 0px 8px 30px 0px, and 16px vertical padding, 22px horizontal padding. The header has a shadow of rgba(0, 0, 0, 0.06) 0px 8px 30px 0px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516517287-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516517287-thumb.jpg |
