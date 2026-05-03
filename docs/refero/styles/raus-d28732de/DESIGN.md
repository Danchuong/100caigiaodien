# Raus — Refero Style

- Refero URL: https://styles.refero.design/style/d28732de-1b7a-4d37-b7aa-edfa7caf428b
- Site URL: https://www.raus.life
- ID: d28732de-1b7a-4d37-b7aa-edfa7caf428b
- Theme: light
- Industry: other
- Created: 2026-04-30T02:39:37.518Z
- Ranks: newest: 326, popular: 276, trending: 161

> Warm rustic minimalism: soft natural tones meet crisp, understated typography.

## Description

Raus employs a serene wilderness-retreat visual language: naturalistic colors, soft rounded forms, and compact typography that blends seamlessly with rich photography of cabins and nature. The overall impression is one of grounded tranquility with moments of playful vibrancy. Components feature subtle elevation and generous padding, creating a comfortable, inviting experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Forest Green | #006434 | brand | Brand logo, primary text elements where emphasis is needed, subtle accents |
| Midnight Pine | #23212c | neutral | Primary text, deep gray backgrounds for secondary buttons and interactive elements, prominent borders |
| Vanilla Cream | #ffffff | neutral | Clean canvas for cards and UI elements, text on dark backgrounds, active indicator borders |
| Sunflower Gold | #fcbd1c | accent | Yellow wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Sky Mist | #a6dfff | accent | Soft background for informational sections or subtle highlights, providing a cool contrast |
| Charred Orange | #dd5000 | accent | Primary action button background, highlight text for important messages, icon fills — a vivid, earthy accent |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| neue-haas-unica | Helvetica Neue | 300, 400 | 12px, 14px, 16px, 18px, 22px, 36px, 40px | 0.95, 1.00, 1.15, 1.18, 1.22, 1.29, 1.33 | All primary interface text, navigation, body copy, and most headings. Its varied weights and negative letter-spacing contribute to a precise, elegant feel. |
| fonts | PT Sans Caption | 300 | 22px, 28px, 36px, 40px | 0.95, 1.00, 1.07, 1.18 | Used sparingly for prominent headings, specifically at lighter weights to convey a sense of understated importance rather than overt loudness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.22 | -0.24 |
| body-sm | 14 | 1.18 | -0.28 |
| body | 16 | 1.15 | -0.32 |
| subheading | 18 | 1.33 | -0.36 |
| heading | 22 | 1 | -0.44 |
| heading-lg | 36 | 1.07 | -0.54 |
| display | 40 | 0.95 | -0.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "buttons": "20px",
    "formFields": "12px",
    "navigation": "99px",
    "smallElements": "4px",
    "circularElements": "72px"
  },
  "elementGap": "20px",
  "sectionGap": "192px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button (Charred Orange)

**Role:** Key calls to action requiring immediate attention.

Filled with Charred Orange (#dd5000), text in Vanilla Cream (#ffffff), 12px border-radius, 10px horizontal padding. A vibrant, inviting button.

### Secondary Action Button (Midnight Pine)

**Role:** General purpose actions, typically less prominent than primary actions.

Filled with Midnight Pine (#23212c), text in Vanilla Cream (#ffffff), 20px border-radius, 20px horizontal padding. Dark, solid, and reliable.

### Ghost Button (Midnight Pine)

**Role:** Subtle actions or navigation links that appear as text.

Transparent background, text in Midnight Pine (#23212c), no border-radius defined, no explicit padding. Blends seamlessly with content.

### Gift Voucher Button (Charred Orange Outline)

**Role:** Call to action specifically for gift vouchers, using brand color as an outline.

Transparent background, text in Charred Orange (#dd5000), 12px border-radius, no horizontal padding, 1px solid Charred Orange border. A distinct outlined button.

### Information Card (Vanilla Cream)

**Role:** Container for content sections like articles or feature descriptions.

Background in Vanilla Cream (#ffffff), 20px border-radius, 20px padding on all sides. Creates a soft, raised surface.

### Search Form Card (Sunflower Gold)

**Role:** Prominent interactive elements for searching or filtering.

Background in Sunflower Gold (#fcbd1c), 40px border-radius, 48px horizontal padding. A highly visible and inviting yellow block with significant rounding.

### Navigation Link

**Role:** Primary site navigation items.

Midnight Pine (#23212c) text, typically 16px, transparent background. Active state is subtly indicated by a 99px border-radius for pill-like highlight (not explicitly filled).

### Input Field

**Role:** User input fields within forms.

Default border color is light gray (implied from #23212c usage as border), placeholder text uses Midnight Pine (#23212c). Underlined style suggests minimal boxing.

## Do's

- Use Midnight Pine (#23212c) for most text and solid backgrounds on secondary buttons, maintaining a grounded feel.
- Apply Forest Green (#006434) exclusively for the brand logo and specific text links where core identity is reinforced.
- Prioritize Charred Orange (#dd5000) for primary action buttons to create a clear, warm focal point.
- Utilize Sunflower Gold (#fcbd1c) as a background for interactive form sections to make them playfully prominent.
- Ensure all cards and many buttons use a soft 20px border-radius to maintain approachability and organic feel.
- For headlines, pair `neue-haas-unica` or `fonts` at weight 300 with negative letter-spacing for refined, understated presence.
- Maintain generous padding of 20px around card content and 48px horizontally in key interactive cards like the search form.

## Don'ts

- Avoid using multiple vivid accent colors together; stick to Charred Orange (#dd5000) for primary actions and Sunflower Gold (#fcbd1c) for background blocks.
- Do not use sharp 0px border-radii for any surfaced components; all interactive and content blocks should feature soft rounding.
- Do not introduce heavy shadows; surfaces should primarily rely on background color differences and subtle borders for distinction.
- Refrain from using Forest Green (#006434) for large blocks of text or general UI elements; reserve it for distinct brand marks and key links.
- Do not use bold-weight typography for main headings; the system relies on lighter weights (300) with generous tracking for elegance.
- Avoid tight spacing between elements within cards; use at least 20px padding for comfort.
- Do not use generic system fonts; `neue-haas-unica` and `fonts` are critical for the brand's typographic identity.

## Layout

The page maintains a contained layout within an inferred maximum width, centered on a warm, off-white canvas. The hero section features a large, left-aligned headline contrasting with full-width, organically shaped photographic elements. Content sections alternate between visually engaging image cards and text blocks, often with a 2-column arrangement. Card grids are prominent for presenting content like journal entries. Vertical spacing is generous and comfortable, creating a relaxed flow. The top navigation is a fixed header with left-aligned brand logo and right-aligned links. The overall density feels spacious and intentional, guiding the eye through a narrative of tranquil retreats.

## Imagery

The site uses high-quality, authentic photography of small, modern cabins in natural settings, often with lush greenery or expansive views. Images are typically full-bleed within card components, featuring organic, rounded-corner masking. The focus is on rustic yet comfortable lifestyle and the natural environment, rather than posed models or abstract concepts. Illustrations are minimal, primarily consisting of outlined icons (e.g., arrows) that match the precise typographic style. Photography is the primary visual storytelling mechanism, used to evoke a sense of quiet escape and natural beauty, occupying significant visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| Airbnb (early designs) | Focus on high-quality photography as primary content, minimal UI with soft shapes, and distinct brand accent colors. |
| Offseason | Emphasis on nature and escape, clean design, and a limited, earthy color palette with a single vibrant accent. |
| Cabinfolk | Journalistic style with interwoven photography and text, warm neutral backgrounds, and a curated, inviting aesthetic. |
| Getaway | Rental cabins, focus on serene experiences, clean typography, and a brand identity built around natural escapes. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #23212c
background: #fcf5e9
border: #23212c
accent: #006434
primary action: #23212c (filled action)

Example Component Prompts:
Create a hero section: Canvas Background (#fcf5e9). Headline 'Book restful space outside your daily routine.' using fonts weight 300, 40px, Midnight Pine (#23212c), letter-spacing -0.6px. Below it, an image card with content padding 20px, 20px radius, image showcasing a cabin in nature.
Create a Primary Action Button: #23212c background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a blog post card: Panel Background (#ffffff), 20px radius, 20px all-side padding. Features a full-bleed natural photo with rounded top, followed by body-sm text 'PERSPECTIVES' in Midnight Pine (#23212c), and a subheading 'Anne-Christin shares: her time in a design cabin' using neue-haas-unica weight 400, 22px, Forest Green (#006434).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516752504-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516752504-thumb.jpg |
