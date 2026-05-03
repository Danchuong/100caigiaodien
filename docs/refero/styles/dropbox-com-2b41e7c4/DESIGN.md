# Dropbox.com — Refero Style

- Refero URL: https://styles.refero.design/style/2b41e7c4-1e8c-4ea2-a87f-51e24c57886e
- Site URL: https://dropbox.com
- ID: 2b41e7c4-1e8c-4ea2-a87f-51e24c57886e
- Theme: light
- Industry: saas
- Created: 2026-04-12T11:57:56.000Z
- Ranks: newest: 928, popular: 251, trending: 286

> Pristine Digital Workspace. A highly organized, clean desktop environment where every element has its place and purpose.

## Description

Dropbox's visual style is that of a confident, established tech product: a pristine, spacious digital workspace with pops of vibrant interaction. Dominant bright surfaces and substantial, clear typography create an atmosphere of straightforward efficiency and trustworthiness. The strategic use of a vivid royal blue for primary calls to action, contrasted with deep graphite text and subtle, almost invisible backgrounds, maintains a focused and uncluttered user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Graphite Black | #000000 | neutral | Primary heading and body text, button text on light backgrounds, strong accents. |
| Cloud White | #ffffff | neutral | Default page backgrounds, primary surface for content areas like hero sections. |
| Off-White Canvas | #f7f5f2 | neutral | Secondary background color for subtle content separation, cards, and modal backdrops. |
| Deep Graphite | #1e1919 | neutral | Main body text, navigation links, and button text on light-colored buttons — provides high contrast. |
| Royal Blue | #0061fe | brand | Primary Call-to-Action buttons, active navigation states, and interactive link elements — for consistent user guidance. |
| Muted Grey | #716b61 | neutral | Secondary body text, descriptive labels, and subtle UI elements like borders or inactive icons. |
| Almond Dust | #eee9e2 | neutral | Subtle surface elevation for cards or distinct content blocks, offering a soft visual break from the canvas. |
| Blush Pink | #cd2f7b | accent | Decorative accents or emphasis in specific UI contexts, often for highlighting information or badges. |
| Ash Border | #c6c4c3 | neutral | Light border color for subtle separation of UI elements and form fields. |
| Dark Overlay Gradient | #292c31 | neutral | Background for specific sections or elements requiring a dark, immersive feel, often in subtle gradients. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Sharp Grotesk | Montserrat | 500 | 18px, 26px, 40px | 1.20, 1.30 | Main headings and significant display text. Weight 500 maintains a robust yet approachable presence. |
| Sharp Grotesk 23 | Montserrat | 400 | 32px | 1.20 | Prominent subheadings, slightly lighter than main headings to create hierarchy and readability. |
| Atlas Grotesk Web | Inter | 400, 500, 700 | 12px, 14px, 16px, 20px | 1.20, 1.43, 1.50, 1.57 | Used for body text, navigation items, links, and various UI elements, providing clear, functional readability across different scales. |
| Times | serif | 400 | 16px | 1.20 | System fallback for specific content or to provide a contrasting, traditional serif voice on occasion. |
| Arial | sans-serif | 400 | 13px | 1.20 | System fallback for minor labels or tooltips when default sans-serif is required. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body | 14 | 1.43 |  |
| body-lg | 16 | 1.5 |  |
| subheading | 18 | 1.2 |  |
| heading-sm | 20 | 1.2 |  |
| heading | 26 | 1.3 |  |
| heading-lg | 32 | 1.2 |  |
| display | 40 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "large": "20px",
    "links": "16px",
    "buttons": "16px",
    "default": "8px",
    "navigation": "12px"
  },
  "elementGap": "12px",
  "sectionGap": "48px",
  "cardPadding": "12px",
  "pageMaxWidth": "1150px"
}
```

## Components

### Primary CTA Button

**Role:** Calls to action, 'Get started' type buttons

Filled with Royal Blue (#0061fe) and Cloud White (#f7f5f2) text. Features 16px border-radius and generous padding (24px horizontal, 24px vertical) for a prominent, friendly presence.

### Navigation Link Button

**Role:** Top navigation items, secondary actions

Transparent background (rgba(0, 0, 0, 0)) with Deep Graphite (#1e1919) text. No explicit border-radius (0px), offering a sharp, integrated feel in navigation contexts. Padding is 12px horizontal, 16px vertical.

### Dark Navigation Link Button

**Role:** Navigation items for dark mode or contrasting sections

Transparent background (rgba(0, 0, 0, 0)) with Cloud White (#f7f5f2) text. No explicit border-radius (0px) and no padding, designed for inline text links that maintain hover effect.

### Informational Card

**Role:** Feature blocks, content organization

Subtle Almond Dust (#eee9e2) background with no shadows. Features a 0px border-radius, maintaining a sharp, clean edge for distinct content differentiation. Zero internal padding is specified from component variant data, implying content controls its own internal spacing.

### Lightweight Text Link Card

**Role:** Content container for simple text lists or outlines

Transparent background, no border-radius. Padding is 114.5px left and right, implying a container with substantial inline cushioning for its text content.

### Text Link with Arrow

**Role:** 'Learn more' or 'Read article' links

Deep Graphite (#1e1919) text on transparent background, no radius. The 16px padding on text-based links creates ample clickable area, often accompanied by an arrow icon.

## Do's

- Prioritize Royal Blue (#0061fe) for all primary call-to-action buttons, ensuring consistent visual hierarchy.
- Use Deep Graphite (#1e1919) for all primary body text and main navigation links against light backgrounds.
- Establish clear content separation using Off-White Canvas (#f7f5f2) for backgrounds and Almond Dust (#eee9e2) for elevated card surfaces.
- Apply 16px border-radius to all interactive buttons for a soft, approachable feel, unless explicitly overridden by component design.
- Maintain a sense of generous whitespace; ensure a minimum of 48px vertical spacing between major sections.
- Utilize Sharp Grotesk (Montserrat substitute) for all headlines to convey a clear, robust brand voice.
- For multi-column layouts, ensure column gaps are set to at least 24px to prevent visual crowding.

## Don'ts

- Avoid using highly saturated accent colors for text unless they are interactive links in Royal Blue.
- Do not introduce strong shadows; the design relies on subtle background color shifts for depth.
- Refrain from using overly decorative fonts; stick to Atlas Grotesk Web (Inter substitute) for all body copy and UI elements.
- Do not use border-radius values less than 8px, as the system prefers slightly rounded corners for most interaction points.
- Avoid overly dense information blocks; use generous paragraph line-heights (e.g., 1.5 for 16px text) and element spacing.
- Do not use stark black (#000000) for regular body text; reserve it for distinct headings or strong accents only.
- Do not use full-width layouts; constrain all content within a maximum width of 1150px.

## Imagery

The visual language for imagery is a mix of product screenshots (often within high-fidelity mockups of devices), abstract conceptual illustrations, and tightly cropped, professional photography. Photography tends to be lifestyle-oriented but focused on work environments, with natural light and a slightly desaturated, clean aesthetic. Illustrations are minimalistic, often using geometric shapes and a limited palette of brand colors. Icons are outlined (often using Graphite Black or Muted Grey), with a consistent stroke weight, and monochrome. Imagery serves both to explain product features (screenshots) and to provide aspirational context (photography of people working), maintaining a balance between functional and atmospheric content. Images are typically contained within cards or sections, not often full-bleed.

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Shares a clean, bright, highly functional UI with strategic use of vibrant accent colors against a predominantly neutral palette. |
| Webflow | Similar focus on pristine, spacious layouts, clear sans-serif typography, and distinct card-based content organization. |
| Notion | Emphasizes a highly legible, minimalist aesthetic with functional use of typography and clear information hierarchy within a light theme. |
| Google Workspace | Features a distinct use of blue as a primary interactive brand color against a clean, white, and gray interface, prioritizing usability. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: Text (#1e1919), Background (#ffffff), Primary CTA (#0061fe), Secondary Surface (#f7f5f2), Border (#c6c4c3).

1. Create a Hero Section: Cloud White (#ffffff) background. Headline 'Get to work, with a lot less work' at 40px Sharp Grotesk 500, Graphite Black (#000000). Body text 'Dropbox delivers tools...' at 16px Atlas Grotesk Web 400, Deep Graphite (#1e1919). Primary CTA Button 'Try Dropbox free' (Royal Blue #0061fe, Cloud White #f7f5f2 text, 16px radius, 24px padding), next to the text content.
2. Design a Feature Card: Almond Dust (#eee9e2) background, 0px border-radius. Title 'Technology' at 20px Atlas Grotesk Web 500, Deep Graphite (#1e1919). Body text at 14px Atlas Grotesk Web 400, Muted Grey (#716b61). Include a 'Learn more' Text Link with Arrow (Deep Graphite #1e1919 text, 16px padding).
3. Build a Navigation Bar: Cloud White (#ffffff) background. 'Dropbox' logo on the left. Navigation Link Buttons (transparent, Deep Graphite #1e1919 text, 12px horizontal, 16px vertical padding, 0px radius) for 'Products', 'Solutions', 'Enterprise', 'Pricing'. On the far right, a Royal Blue (#0061fe) Primary CTA Button for 'Get started'.

### Layout

The page primarily uses a max-width, centered containment model (approx. 1150px) for most content sections, ensuring readability across various screen sizes. The hero section often features a split layout with prominent text on the left and product screenshots or illustrations on the right. Content sections generally follow a consistent vertical rhythm with 48px section gaps. Many sections utilize a 2-column or 3-column grid for features and cards. The page frequently alternates between Cloud White (#ffffff) and Off-White Canvas (#f7f5f2) background bands to create visual rhythm and delineate distinct content blocks. The navigation is a sticky top bar, maintaining brand presence throughout scrolling.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105258119-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105258119-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2b41e7c4-1e8c-4ea2-a87f-51e24c57886e-1777567810477-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2b41e7c4-1e8c-4ea2-a87f-51e24c57886e-1777567810477-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2b41e7c4-1e8c-4ea2-a87f-51e24c57886e-1777567810477-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2b41e7c4-1e8c-4ea2-a87f-51e24c57886e-1777567810477-preview-detail-poster.jpg |
