# Stellar — Refero Style

- Refero URL: https://styles.refero.design/style/98a1ad40-90e2-4665-b49f-e5ffd4d4b90b
- Site URL: https://www.stellar.work
- ID: 98a1ad40-90e2-4665-b49f-e5ffd4d4b90b
- Theme: dark
- Industry: design
- Created: 2026-04-30T01:23:35.661Z
- Ranks: newest: 615, popular: 1134, trending: 1145

> Midnight canvas, violet beacon.

## Description

Stellar uses a high-contrast dark mode design with near-black backgrounds serving as a deep canvas for bright white typography. A single, vivid violet acts as a primary brand accent, used sparingly to highlight interactive elements and create a sense of direct action. Surfaces are typically flat and minimal, avoiding heavy shadows or decorative elements to maintain a streamlined, focused experience. Typography is utilitarian yet impactful, employing precise letter-spacing and varying weights to establish clear hierarchy against the dark backdrop.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page background, primary surface for elevated cards, base for borders |
| Stellar Black | #171718 | neutral | Secondary surface, subtle background for cards, slight distinction from page background |
| Storm Gray | #2c2c2e | neutral | Interface element backgrounds (e.g., input fields), ghost button backgrounds, subtle borders |
| Ultraviolet | #6a48f2 | brand | Primary action buttons, interactive highlights, navigational accents on dark backgrounds — creates a vivid point of focus; Decorative background accent, adding depth and visual interest behind specific sections or elements |
| Spectral White | #f3f3f3 | neutral | Dominant text color for primary headings and body copy on dark backgrounds |
| Cloudburst | #888888 | neutral | Muted secondary text, placeholder text, subtle decorative elements, default icon fills. Provides contrast without stealing focus |
| Lunar White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Glimmer White | #e9e9e9 | neutral | Less prominent text, default link color, lighter highlights |
| Dusty Gray | #dddddd | neutral | Subtle borders, inactive navigation items, lighter UI details |
| Cosmic Dust | #333333 | neutral | Low-contrast decorative details, muted icon elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal | Inter | 400, 500 | 14px, 15px, 16px, 18px, 19px, 21px, 22px, 40px, 70px, 72px, 104px | 1.00, 1.10, 1.20, 1.43, 1.50, 1.55 | Primary typeface for all UI text, headings, and body copy. Its precise tracking, especially at larger sizes, enhances legibility and contributes to the crisp, modern feel of the dark UI. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.5 | 0.35 |
| body | 16 | 1.5 | 0.336 |
| subheading | 18 | 1.5 | 0.36 |
| heading | 21 | 1.2 | 0.168 |
| heading-lg | 40 | 1.2 | -0.4 |
| display | 72 | 1.1 | -0.72 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "buttons": "50px",
    "default": "6px",
    "circular": "100%",
    "roundCards": "10px"
  },
  "elementGap": "20px",
  "sectionGap": "50px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Calls to action, e.g., 'Reserve your sprint'.

Filled button with Ultraviolet background (#6a48f2), Lunar White text (#ffffff), and a 50px border-radius, giving it a pill shape. Padding of 10px vertical and 24px horizontal. Text uses Neue Montreal, weight 400.

### Ghost Card Button

**Role:** Secondary action within card interfaces.

Ghost button with Storm Gray background (#2c2c2e), Cloudburst text (#888888), and a 100% border-radius for a circular shape (though no padding is applied directly to the button container based on data; assumed for internal icon/text). Text is often uncolored or small, representing an icon or minimal label.

### Informational Button

**Role:** Callouts or navigation within sections, e.g., 'Learn More'.

Rectangular button with Storm Gray background (#2c2c2e), Glimmer White text (#e9e9e9), and a 6px border-radius. Padding of 16px vertical and 20px horizontal. Uses Neue Montreal, weight 400.

### Content Card - Neutral

**Role:** Container for showcasing projects, designers, or information.

Flat card with Stellar Black background (#171718), 6px border-radius, and 20px padding on all sides. Content inside uses Spectral White for headings and Cloudburst for body text. No box shadow.

### Content Card - Rounded

**Role:** Container for showcasing work examples.

Flat card with Stellar Black background (#171718), 10px border-radius, and no padding defined at the card level. Content elements inside typically have their own padding. No box shadow.

### Ghost Card

**Role:** Containers for imagery or specific, unpadded graphic elements.

Transparent background with 0px radius. Primarily used as a container to visually group elements without adding a distinct background surface or padding. Often relies on inner elements for visual boundaries and structure.

### Text Input

**Role:** Standard user input fields.

Input field with Storm Gray background (#2c2c2e), Spectral White text (#f3f3f3), 6px border-radius, and 12px horizontal padding. No vertical padding defined, assuming internal text alignment. Uses Neue Montreal, weight 400.

### Designer Avatar Card

**Role:** Individual profile cards for designers.

A ghost card with transparent background, 10px border-radius. Contains a designer's image and text typically formatted with Spectral White for names and Cloudburst for roles, using Neue Montreal.

## Do's

- Prioritize Absolute Zero (#000000) as the primary page background for all sections to maintain a consistent dark theme.
- Use Ultraviolet (#6a48f2) exclusively for primary calls to action, interactive highlights, and brand elements requiring high visual impact.
- Apply a 6px border-radius to inputs, most cards, and some buttons for a consistent soft-edged feel.
- Ensure all primary headings use Spectral White (#f3f3f3) with Neue Montreal, weight 400-500, and precise letter-spacing from the type scale to stand out against the dark backgrounds.
- Maintain high contrast text with a minimum ratio of 17:1 for Spectral White / Lunar White text on Absolute Zero or Stellar Black backgrounds.
- Confine visual flair to the single Ultraviolet accent color; avoid introducing additional chromatic colors for UI elements.
- Utilize 'Element gap: 20px' to consistently separate major UI components horizontally and vertically, including cards and buttons.

## Don'ts

- Avoid using multiple vibrant accent colors; the brand relies on a single defined Ultraviolet (#6a48f2) as its color statement.
- Refrain from using strong box shadows on general UI elements; surfaces are largely flat with minimal elevation.
- Do not deviate from the pill-shaped 50px border-radius for primary action buttons.
- Do not use generic system fonts; always specify 'Neue Montreal' or its substitute 'Inter' for all text elements.
- Avoid decorative gradients on standard UI components; save the gradient for specific atmospheric or background sections.
- Do not reduce the letter-spacing for body text (14-16px) as it requires positive tracking for readability on dark backgrounds.
- Never use dark text colors on Stellar Black (#171718) or Absolute Zero (#000000) backgrounds; rely on white and light gray tones for legibility.

## Layout

The page primarily uses a full-bleed dark background with content centered within an implicit `pageMaxWidth`. The hero section is full-bleed, featuring a large, centered headline and subtext. Sections generally follow a consistent vertical rhythm with minimal visual dividers, flowing seamlessly. Content is arranged in alternating patterns, such as a large centered headline and subtext followed by a responsive grid of cards for team members or project showcases. Card grids are prominent for presenting work and people. The navigation is a minimalist top bar, fixed to the top, with basic links and a primary action button.

## Imagery

This site utilizes a mix of product screenshots, often contained within cards, and portraits for designer profiles. Photography is high-key and direct, typically showing tight crops of UI or individual faces with minimal background context. Imagery is generally contained within defined card shapes, maintaining clear boundaries and not overlapping. Iconography (where visible) appears to be simple, outlined, and monochromatic, typically in Cloudburst (#888888) against dark backgrounds. Imagery serves to showcase product work or individual talent, acting as explanatory content rather than purely decorative atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Similar dark mode UI with prominent use of white text on dark backgrounds and a single, vibrant accent color for interactive elements. |
| Linear | Shares a precise, compact typographic approach, high-contrast dark theme, and an emphasis on clean, functional UI without heavy ornamentation. |
| Supabase | Employs a dark, developers-tool aesthetic with strong type hierarchy and a singular bright accent color to draw attention to key actions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #f3f3f3
background: #000000
border: #888888
accent: #6a48f2
primary action: #6a48f2 (filled action)

Example Component Prompts:
1. Create a Hero Section: Absolute Zero (#000000) background. Headline 'Your brand or website, delivered at lightspeed.' using Neue Montreal, 72px size, 1.1 line-height, -0.72px letter-spacing, Spectral White (#f3f3f3). Subtext 'Get a new brand or website in just 2 weeks.' using Neue Montreal, 18px size, 1.5 line-height, 0.36px letter-spacing, Cloudburst (#888888).
2. Create a Primary Action Button: 'Reserve your sprint' with Ultraviolet (#6a48f2) background, Lunar White (#ffffff) text using Neue Montreal 16px weight 400, 50px border-radius, and 10px vertical, 24px horizontal padding.
3. Create a Designer Profile Card: Stellar Black (#171718) background, 10px border-radius. Inside, display an image (avatar). Below the image, 'Joonas' using Neue Montreal 18px weight 500, Spectral White (#f3f3f3). Below the name, 'Brand Designer' using Neue Montreal 15px weight 400, Cloudburst (#888888).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512191202-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512191202-thumb.jpg |
