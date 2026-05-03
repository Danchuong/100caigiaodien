# Render — Refero Style

- Refero URL: https://styles.refero.design/style/c14bfde7-6f08-4b54-bd9b-39989d10cfef
- Site URL: https://render.com
- ID: c14bfde7-6f08-4b54-bd9b-39989d10cfef
- Theme: light
- Industry: devtools
- Created: 2026-01-22T11:53:09.000Z
- Ranks: newest: 1288, popular: 45, trending: 110

> Crisp canvas, gradient fireworks. A bright, white backdrop that provides contrast for a constellation of colorful gradients and powerful typography.

## Description

This design system is a light, airy canvas punctuated by bold, evocative gradients and a vibrant, expansive color palette. The combination of clean, modern sans-serifs and a striking, multi-color gradient usage creates a dynamic yet professional atmosphere. Text is predominantly dark charcoal against a pristine white background, allowing the rich accent colors and gradients to highlight key information and interactive elements, giving the impression of a sophisticated, high-performance platform.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White Canvas | #ffffff | neutral | Primary page and component backgrounds, offering a pristine, expansive base for content. |
| Charcoal Text | #0d0d0d | neutral | Primary text color for headlines and body copy, ensuring strong contrast against light backgrounds. |
| Asphalt Gray | #272727 | neutral | Darker borders and subtle background elements, providing visual separation without harshness. |
| Pebble Gray | #4d4d4d | neutral | Secondary text, navigation items, and less prominent text, offering a softened contrast. |
| Smoke Gray | #6b6b6b | neutral | Tertiary text, subtle descriptions, and inactive states. |
| Silver Lining | #e3e3e3 | neutral | Borders, dividers, and subtle background fills, establishing visual structure on cards and sections. |
| Lavender Mist | #e6daff | neutral | Lightest accent background for navigation states and contextual highlights. |
| Arctic Blue Tint | #e0f4ff | neutral | Background for specific informational sections or subtle visual separation. |
| Grape Glow | #8a05ff | accent | Highlight elements, interactive states, and specific brand feature callouts – the primary accent color. |
| Sunset Violet | #d67f2 | brand | Prominent headings and visual highlights, signifying importance and drawing immediate attention with its vibrant energy. |
| Digital Emerald | #009e7a | accent | Specific callouts and highlighted text/icons, indicating positive states or unique offerings. |
| Deep Plum | #48008c | accent | Link states and stronger purple accents, providing depth to interactive elements. |
| Crimson Spark | #e96770 | accent | Highlighting specific sections and attention-grabbing elements, signaling urgency or novelty. |
| Candy Pink | #f347ff | accent | Secondary vibrant accent, used for diverse visual elements to add a playful yet modern touch. |
| Sky Surge | #33acff | accent | Secondary accent for active states and informational elements, providing a clear, bright contrast. |
| Twilight Gradient | #8a05ff | brand | Used for hero sections and distinctive backgrounds, creating a sense of depth and advanced technology. |
| Radiant Purple to Pink | #9b52fb | accent | Used for specific interactive elements or visual flourishes, adding a dynamic and soft touch. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roobert | Inter | 300, 400 | 20px, 32px, 40px, 48px, 56px, 64px, 80px | 1.00, 1.05, 1.06, 1.07, 1.08, 1.10, 1.15, 1.20 | Headlines and prominent display text that require a strong, modern presence. The negative letter spacing at larger sizes creates a tight, impactful visual. |
| PPNeueMontreal | System UI | 400, 500 | 12px, 14px, 16px, 18px, 20px, 24px | 1.12, 1.21, 1.25, 1.33, 1.38, 1.40, 1.44, 1.50 | Body copy, navigation, buttons, and general UI text. Its clean, readable nature ensures clarity for all informational content. |
| PPNeueMontrealMono | Space Mono | 400, 500 | 11px, 12px, 14px | 1.27, 1.33, 1.43 | Code snippets, technical labels, and specialized data display where monospaced precision is essential for alignment and clarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.43 | 0.24 |
| body-sm | 14 | 1.4 | 0.14 |
| body | 16 | 1.5 | 0.08 |
| subheading | 18 | 1.33 |  |
| heading-sm | 20 | 1.2 | -0.2 |
| heading | 24 | 1.25 |  |
| heading-lg | 32 | 1.15 | -0.48 |
| display | 64 | 1.08 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "937px",
    "buttons": "0px",
    "default": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Hero CTA Button Group



### Feature Steps — Click, click, done



### Announcement Banner + Pill Tags



### Primary Dark Button

**Role:** Call to Action

Solid Charcoal Text button. `backgroundColor: #0d0d0d`, `color: #ffffff`. `borderRadius: 0px`. `padding: 0px 10px`.

### Outline Button

**Role:** Secondary Action

Transparent button with Charcoal Text and a light gray border. `backgroundColor: rgba(0, 0, 0, 0)`, `color: #0d0d0d`, `border: 1px solid #e3e3e3`. `borderRadius: 0px`. `padding: 16px 30px`.

### Text Link Button

**Role:** Tertiary Action

Plain text button. `backgroundColor: #ffffff`, `color: #0d0d0d`. `borderRadius: 0px`. `padding: 0px`.

### Header Navigation Item

**Role:** Primary Navigation

Text link using `PPNeueMontreal`, `weight: 500`, `size: 14px`, `lineHeight: 1.25`, `color: #4d4d4d`. On hover, the text color changes or a subtle underline appears.

### Hero Headline

**Role:** Page Title

Uses `Roobert`, `weight: 400`, `size: 64px`, `lineHeight: 1.08`, `letterSpacing: -0.025em`. Features embedded gradients for specific words, e.g., 'apps & agents' uses `linear-gradient(to right, rgb(138, 5, 255), rgb(214, 127, 46))`.

### Feature List Item Heading

**Role:** Section Sub-heading

Uses `Roobert`, `weight: 400`, `size: 20px`, `lineHeight: 1.2`, `letterSpacing: -0.01em`. Initial number is highlighted with `Grape Glow` (#8a05ff).

### Body Paragraph

**Role:** General Content

Uses `PPNeueMontreal`, `weight: 400`, `size: 18px`, `lineHeight: 1.33`, `color: #0d0d0d`.

### Pill Tag

**Role:** Metadata/Label

Small label with `backgroundColor: rgba(0,0,0,0)`, `color: #0d0d0d`, `borderRadius: 937px`, `padding: 0px 10px`. Border of `Silver Lining` (#e3e3e3).

## Do's

- Use Charcoal Text (`#0d0d0d`) for all primary text against white backgrounds to ensure AAA contrast.
- Apply `borderRadius: 0px` for all standard buttons and cards to maintain a sharp, modern aesthetic.
- Utilize `Roobert` for all headlines with negative letter spacing (`-0.03em` to `-0.01em`) to create a signature tight, impactful look.
- Employ the `Grape Glow` (`#8a05ff`) as the primary accent for interactive elements and key numerical highlights.
- Incorporate the linear brand gradients (e.g., `linear-gradient(to right, rgb(138, 5, 255), rgb(214, 127, 46))`) for high-impact headlines or distinctive background sections.
- Maintain a clear visual hierarchy by consistently using `PPNeueMontreal` for body text and UI elements, with `16px` as a base font size.
- Ensure all interactive elements have a clear hover state, typically darkening the text or background subtly as seen on navigation items.

## Don'ts

- Do not introduce rounded corners other than `937px` for specific pill-shaped tags to maintain the sharp aesthetic.
- Avoid using additional bright, highly saturated colors for backgrounds; reserve them for accents and gradients.
- Do not deviate from the specified font families; PPNeueMontreal and Roobert define the typographic voice.
- Do not use generic box shadows; elevation is primarily achieved through background color shifts and borders.
- Avoid overuse of the vivid accent colors; their power comes from strategic placement to highlight key information.
- Do not apply `letterSpacing: 0` to large headlines; the distinctive negative letter spacing of Roobert is crucial.
- Do not use a solid background color for the 'apps & agents' portion of the main hero headline; it must retain its gradient fill.

## Layout

The page model is a max-width, center-aligned container for main content, providing comfortable reading width on a full-bleed white background. The hero section is full-bleed with a left-aligned, gradient-filled headline over a white background, accompanied by a stylized technical illustration on the right. Sections are clearly delineated by consistent vertical spacing, creating an airy feel. Content is primarily arranged in two-column layouts, often alternating text and image/illustration, with some sections stacking content centrally. The navigation is a sticky top bar with a left-aligned logo and right-aligned links and CTA buttons. Density is spacious, prioritizing readability and visual breathing room between blocks of information.

## Imagery

The visual language focuses on abstract, geometric patterns and subtle product illustrations. Graphics often feature white or muted backgrounds, with elements constructed from simple shapes and lines, frequently incorporating the brand's vibrant accent colors and gradients. Treatment typically isolates elements against a clean backdrop, avoiding busy compositions. Icons are outlined or filled in a minimalist style, often monochromatic or using a single accent color. Photography is absent; the emphasis is on schematic representations and UI mockups. The overall role is to explain technical concepts and showcase product functionality through stylized, uncluttered visuals.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a clean, light aesthetic with a developer-tool focus, uses strong typography, and leverages select accent colors to highlight key UI elements. |
| Supabase | Exhibits a similar design philosophy with clear, dark text on light backgrounds and uses vibrant, often purple-hued, accent colors for interactive components and branding. |
| Figma | Features a strong emphasis on clean, functional UI, distinct typography, and strategic use of color to differentiate features and states rather than decorative elements. |
| Railway | Employs bold headlines, clear information hierarchy, and a restrained color palette punctuated by vibrant, often gradient-based, accents for a modern developer-centric experience. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `#0d0d0d` (Charcoal Text)
- Background: `#ffffff` (White Canvas)
- CTA Background: `#0d0d0d` (Charcoal Text)
- CTA Text: `#ffffff` (White Canvas)
- Border: `#e3e3e3` (Silver Lining)
- Accent: `#8a05ff` (Grape Glow)

### 3-5 Example Component Prompts
1. **Create a hero section:** White background. Headline 'Your fastest path to production for' in Roobert, 64px, weight 400, #0d0d0d, letter-spacing -1.6px. Followed by 'apps & agents' using `linear-gradient(to right, rgb(138, 5, 255), rgb(214, 127, 46))` as foreground color, same font. Body text 'Intuitive infrastructure to scale any app or agent from your first user to your billionth.' in PPNeueMontreal, 18px, weight 400, #0d0d0d, line-height 1.33. Add a Primary Dark Button 'Start for free' and an Outline Button 'Get in touch'.
2. **Generate a feature card:** White background, 0px border-radius, 20px padding. Title 'Select a service' in Roobert, 20px, weight 400, #0d0d0d, letter-spacing -0.2px. A numeric indicator '1' in Grape Glow (`#8a05ff`), size 24px. Body text 'Choose what you need to run your apps, APIs, agent logic, databases, cron jobs, and more.' in PPNeueMontreal, 16px, weight 400, #0d0d0d, line-height 1.5. Border-bottom of the card is Silver Lining (`#e3e3e3`).
3. **Design a top navigation bar:** White background, 0px border-radius. Logo on the left, `#0d0d0d`. Navigation links 'Product', 'Pricing', 'Customers' using PPNeueMontreal, 14px, weight 500, #4d4d4d, line-height 1.25. On the far right, an Outline Button 'Sign In' and a Primary Dark Button 'Get Started'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923263576-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923263576-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c14bfde7-6f08-4b54-bd9b-39989d10cfef-1777557372319-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c14bfde7-6f08-4b54-bd9b-39989d10cfef-1777557372319-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c14bfde7-6f08-4b54-bd9b-39989d10cfef-1777557372319-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c14bfde7-6f08-4b54-bd9b-39989d10cfef-1777557372319-preview-detail-poster.jpg |
